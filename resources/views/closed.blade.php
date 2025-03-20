<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Tutup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center min-h-screen bg-gray-100 px-4">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center max-w-md w-full">
        <!-- Ikon Peringatan -->
        <div class="flex justify-center mb-4">
            <svg class="w-16 h-16 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z">
                </path>
            </svg>
        </div>

        <!-- Pesan Utama -->
        <h2 class="text-2xl font-semibold text-red-600">Pendaftaran Sedang Tutup</h2>
        <p class="mt-2 text-gray-700">Silakan kembali pada jam operasional berikut:</p>

        <!-- Detail Waktu -->
        <div class="mt-4 bg-gray-100 p-4 rounded-lg shadow-sm text-gray-800">
            <p><strong>Senin - Jumat:</strong></p>
            <ul class="mt-1">
                <li class="text-sm">✔ 07:00 - 12:00 WIB</li>
                <li class="text-sm">✔ 13:00 - 16:00 WIB</li>
            </ul>
        </div>

        <!-- Tombol Kembali -->
        <a href="{{ route('home') }}" class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-600 transition">
            Kembali ke Beranda
        </a>
    </div>
</body>

</html>