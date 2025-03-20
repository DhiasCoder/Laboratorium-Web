<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

class CheckRegistrationTime
{
    public function handle(Request $request, Closure $next): Response
    {
        // Gunakan timezone Indonesia
        $currentHour = Carbon::now('Asia/Jakarta')->format('H:i');

        // Jam operasional yang diizinkan (07:00 - 12:00 dan 13:00 - 16:00 WIB)
        $isOpen = ($currentHour >= "07:00" && $currentHour < "12:00") ||
            ($currentHour >= "13:00" && $currentHour < "16:00");

        if ($isOpen) {
            return $next($request); // Lanjutkan ke halaman form
        }

        return response()->view('closed'); // Jika di luar jam, tampilkan halaman "tutup"
    }
}
