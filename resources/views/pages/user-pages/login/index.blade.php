<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Laboratorium</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
  <div class="max-w-6xl w-full flex rounded-2xl overflow-hidden custom-shadow bg-white">
    <!-- Left: Form Login -->
    <div class="w-1/2 p-10">
      <div class="flex items-center mb-6">
        <img src="{{ asset('assets/images/logouin.png') }}" alt="Logo" class="w-12 h-12 mr-3">
        <h2 class="text-3xl font-bold text-blue-700">Laboratorium Terpadu</h2>
      </div>
      <p class="text-gray-500 mb-4">Silakan masuk untuk melanjutkan</p>
      <form>
        <div class="mb-4">
          <label class="block text-gray-700">Email</label>
          <input type="email" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="Masukkan email">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Password</label>
          <input type="password" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="Masukkan password">
        </div>
        <!-- Ingat Saya dan Lupa Password -->
        <div class="flex justify-between items-center mb-4">
          <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox text-blue-600">
            <span class="ml-2 text-gray-700">Ingat Saya</span>
          </label>
          <a href="#" class="text-blue-500 text-sm hover:underline">Lupa Password?</a>
        </div>
        <button class="w-full bg-gradient-to-r from-blue-400 to-sky-700 text-white py-3 rounded-lg font-bold hover:opacity-90">Masuk</button>
      </form>
      <p class="text-sm text-center text-gray-500 mt-4">Belum punya akun? <a href="#" class="text-blue-500">Daftar</a></p>
    </div>
    <!-- Right Side - Illustration -->
    <div class="hidden md:block w-1/2 bg-indigo-50 p-12">
      <div class="h-full flex flex-col items-center justify-center">
        <div class="flex justify-center">
          <img src="{{ asset('assets/images/hero.png') }}" alt="Login Illustration" class="w-1/2 max-w-sm mx-auto">
        </div>
        <div class="text-center mt-8">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Laboratorium Terpadu untuk Masa Depan</h3>
          <p class="leading-relaxed tracking-wide max-w-xl text-gray-600">Dukung Inovasi dan Riset dengan Fasilitas Laboratorium terbaik yang tersedia untuk Mahasiswa dan Umum</p>
        </div>
        <!-- Trust Indicators -->
        <div class="mt-12 grid grid-cols-3 gap-8 w-full max-w-md">
          <div class="text-center">
            <div class="text-2xl font-bold text-indigo-600">10+</div>
            <div class="text-sm text-gray-600">Active Users</div>
          </div>
          <div class="text-center">
            <div class="text-2xl font-bold text-indigo-600">10+</div>
            <div class="text-sm text-gray-600">Clients</div>
          </div>
          <div class="text-center">
            <div class="text-2xl font-bold text-indigo-600">10+</div>
            <div class="text-sm text-gray-600">Researchers </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>