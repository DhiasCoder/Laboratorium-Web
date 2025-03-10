<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Laboratorium Terpadu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .custom-shadow {
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .bg-gradient {
      background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
    }

    .input-focus:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
    }

    .animate-float {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }

      100% {
        transform: translateY(0px);
      }
    }

    .btn-gradient {
      background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
      transition: all 0.3s;
    }

    .btn-gradient:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
    }
  </style>
</head>

<body class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
  <div class="max-w-6xl w-full flex flex-col md:flex-row rounded-2xl overflow-hidden custom-shadow bg-white">
    <!-- Left: Form Login (Full width on mobile, half on desktop) -->
    <div class="w-full md:w-1/2 p-6 sm:p-8 md:p-10 bg-white order-2 md:order-1">
      <div class="flex flex-col sm:flex-row items-center mb-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-blue-700 text-center sm:text-left">Laboratorium Terpadu</h2>
      </div>

      <h3 class="text-xl font-semibold text-gray-800 mb-2">Selamat Datang Kembali!</h3>
      <p class="text-gray-500 mb-6">Silakan masuk untuk mengakses akun Anda</p>

      <form>
        <div class="mb-5">
          <label class="block text-gray-700 font-medium mb-2">Email</label>
          <div class="relative">
            <input type="email"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus transition duration-200 pl-10"
              placeholder="Masukkan email Anda">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
        </div>

        <div class="mb-6">
          <label class="block text-gray-700 font-medium mb-2">Password</label>
          <div class="relative">
            <input type="password"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus transition duration-200 pl-10"
              placeholder="Masukkan password Anda">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
          </div>
        </div>

        <!-- Ingat Saya dan Lupa Password -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3 mb-6">
          <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600 rounded">
            <span class="ml-2 text-gray-700">Ingat Saya</span>
          </label>
          <a href="#" class="text-blue-600 text-sm hover:underline font-medium">Lupa Password?</a>
        </div>

        <button class="w-full btn-gradient text-white py-3 rounded-lg font-bold hover:opacity-95 transition-all">
          Masuk
        </button>
      </form>

      <div class="flex items-center my-6">
        <div class="flex-grow h-px bg-gray-200"></div>
        <p class="mx-4 text-gray-400 text-sm">atau masuk dengan</p>
        <div class="flex-grow h-px bg-gray-200"></div>
      </div>

      <div class="grid grid-cols-2 gap-4 mb-6">
        <button class="flex items-center justify-center py-2.5 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
          <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.2837 10.2515H19.5V10.2H12V13.8H16.8383C16.2173 15.8507 14.2798 17.4 12 17.4C9.03671 17.4 6.59997 14.9632 6.59997 12C6.59997 9.03675 9.03671 6.6 12 6.6C13.3529 6.6 14.5682 7.05741 15.5169 7.80154L18.2372 5.08125C16.6355 3.61354 14.4469 2.7 12 2.7C6.91996 2.7 2.79999 6.81998 2.79999 12C2.79999 17.18 6.91996 21.3 12 21.3C17.08 21.3 21.2 17.18 21.2 12C21.2 11.407 21.2556 10.8229 21.1388 10.2515H20.2837Z" fill="#FFC107" />
            <path d="M3.95312 7.75359L7.08175 10.0559C7.91933 8.00824 9.81192 6.6 12 6.6C13.3529 6.6 14.5682 7.05741 15.5169 7.80154L18.2372 5.08125C16.6355 3.61354 14.4469 2.7 12 2.7C8.5219 2.7 5.48366 4.7236 3.95312 7.75359Z" fill="#FF3D00" />
            <path d="M12 21.3C14.3853 21.3 16.5206 20.4169 18.1095 18.9967L15.1056 16.4813C14.1789 17.1694 13.0336 17.4 12 17.4C9.72638 17.4 7.78954 15.8582 7.16257 13.8102L3.97949 16.1959C5.47892 19.303 8.56393 21.3 12 21.3Z" fill="#4CAF50" />
            <path d="M20.2837 10.2515H19.5V10.2H12V13.8H16.8383C16.5447 14.7549 15.9605 15.5848 15.1029 16.1974L15.1056 16.4813L18.1095 18.9967C17.9081 19.1688 21.2 17.1 21.2 12C21.2 11.407 21.2556 10.8229 21.1388 10.2515H20.2837Z" fill="#1976D2" />
          </svg>
          <span class="text-sm font-medium">Google</span>
        </button>
        <button class="flex items-center justify-center py-2.5 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
          <svg class="h-5 w-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
          </svg>
          <span class="text-sm font-medium">Facebook</span>
        </button>
      </div>

      <p class="text-sm text-center text-gray-500 mt-4">Belum punya akun? <a href="#" class="text-blue-600 font-medium hover:underline">Daftar Sekarang</a></p>
      <p class="text-sm text-center text-gray-500 mt-3">
        <a href="{{route('home')}}" class="text-blue-600 font-medium hover:underline">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
          </svg>
          Kembali ke Beranda
        </a>
      </p>
    </div>

    <!-- Right Side - Illustration (Hidden on mobile) -->
    <div class="w-full md:w-1/2 bg-gradient text-white p-6 sm:p-8 md:p-12 order-1 md:order-2">
      <div class="h-full flex flex-col items-center justify-center">
        <div class="flex justify-center mb-6">
          <img src="https://cdn.discordapp.com/attachments/945456645255880754/1348220075525537864/hero.png?ex=67ceab4a&is=67cd59ca&hm=5a1ffa080a4d2956479245e1f3ea4d5ca730c90f45a6c35e71c94f67df9e2972&" alt="Login Illustration" class="w-2/3 max-w-sm mx-auto animate-float">
        </div>
        <div class="text-center mt-4">
          <h3 class="text-xl sm:text-2xl font-bold text-white mb-4">Laboratorium Terpadu untuk Masa Depan</h3>
          <p class="leading-relaxed tracking-wide max-w-xl text-gray-100 text-sm sm:text-base">
            Dukung inovasi dan riset dengan fasilitas laboratorium terbaik yang tersedia untuk mahasiswa dan umum. Akses peralatan canggih dan bimbingan profesional.
          </p>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-8 grid grid-cols-3 gap-4 w-full max-w-md">
          <div class="text-center bg-white/10 rounded-lg p-3 backdrop-blur-sm">
            <div class="text-xl sm:text-2xl font-bold text-white">10+</div>
            <div class="text-xs sm:text-sm text-gray-100">Active Users</div>
          </div>
          <div class="text-center bg-white/10 rounded-lg p-3 backdrop-blur-sm">
            <div class="text-xl sm:text-2xl font-bold text-white">24/7</div>
            <div class="text-xs sm:text-sm text-gray-100">Support</div>
          </div>
          <div class="text-center bg-white/10 rounded-lg p-3 backdrop-blur-sm">
            <div class="text-xl sm:text-2xl font-bold text-white">15+</div>
            <div class="text-xs sm:text-sm text-gray-100">Lab Units</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Auto scroll to login form on page load
    window.addEventListener('load', function() {
      // Menunggu sedikit waktu untuk memastikan halaman sudah dimuat sepenuhnya
      setTimeout(function() {
        // Mencari elemen form login
        const loginForm = document.querySelector('form');
        // Scroll ke posisi form dengan animasi smooth
        loginForm.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }, 500);
    });
  </script>
</body>

</html>