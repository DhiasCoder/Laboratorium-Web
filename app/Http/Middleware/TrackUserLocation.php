<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserAccessLog;
use Illuminate\Support\Facades\Http;

class TrackUserLocation
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->header('X-Forwarded-For') ?? $request->ip(); // Cek apakah ada IP dari proxy

        if ($ip === '127.0.0.1' || $ip === '::1') {
            $ip = '8.8.8.8'; // IP Google DNS untuk testing
        }

        // Cek apakah IP sudah tercatat hari ini
        $existingLog = UserAccessLog::where('ip_address', $ip)
            ->whereDate('created_at', today())
            ->first();

        if (!$existingLog) {
            $response = Http::get("http://ip-api.com/json/{$ip}");
            $locationData = $response->json();

            UserAccessLog::create([
                'ip_address' => $ip,
                'country' => $locationData['country'] ?? 'Unknown',
                'region' => $locationData['regionName'] ?? 'Unknown',
                'city' => $locationData['city'] ?? 'Unknown',
                'latitude' => $locationData['lat'] ?? null,
                'longitude' => $locationData['lon'] ?? null,
                'isp' => $locationData['isp'] ?? 'Unknown',
            ]);
        }

        return $next($request);
    }
}
