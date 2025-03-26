<!-- Navbar -->
<nav id="navbar" class="fixed top-0 left-0 w-full bg-white shadow-md z-50 transition-all duration-300 ease-out flex items-center justify-between px-4 sm:px-6 py-3"
  data-aos="fade-down" data-aos-delay="300">

  <!-- Logo -->
  <div class="flex items-center gap-x-2 sm:gap-x-3">
    <a href="{{ route('home') }}" class="flex items-center">
      <img src="{{asset('assets/images/logouin.png')}}" alt="Logo" class="h-8 sm:h-10 w-auto">
      <span class="text-base sm:text-xl font-bold text-gray-800">LABORATORIUM</span>
    </a>
  </div>

  <!-- Mobile Menu Button -->
  <button id="mobile-menu-button" class="block md:hidden text-gray-800">
    <span class="material-icons">menu</span>
  </button>

  <!-- Desktop Menu -->
  <div class="hidden md:flex items-center gap-x-4 lg:gap-x-6">
    <!-- Dropdown Home -->
    <div class="relative group">
      <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600"><a href="{{ route('home') }}">Home</a></button>
    </div>

    <!-- Dropdown Tentang -->
    <div class="relative group">
      <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">
        Tentang Kami <span class="material-icons">arrow_drop_down</span>
      </button>
      <div class="absolute hidden bg-white shadow-md rounded-md border border-indigo-300 group-hover:block w-52">
        <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Peminjaman Ruang</a>
        <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Peminjaman Alat</a>
      </div>
    </div>

    <!-- Dropdown Fasilitas -->
    <div class="relative group">
      <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">
        Fasilitas <span class="material-icons">arrow_drop_down</span>
      </button>
      <div class="absolute hidden bg-white shadow-md rounded-md border border-indigo-300 group-hover:block w-52">
        <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Alat Laboratorium</a>
        <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Coming Soon</a>
      </div>
    </div>

    <!-- Dropdown Layanan -->
    <div class="relative group">
      <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">
        Layanan <span class="material-icons">arrow_drop_down</span>
      </button>
      <div class="absolute hidden bg-white shadow-md rounded-md border border-indigo-300 group-hover:block w-52">
        <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Peminjaman Ruang</a>
        <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Peminjaman Alat</a>
      </div>
    </div>

    <!-- Dropdown Jadwal -->
    <div class="relative group">
      <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600"><a href="{{ route('jadwal') }}">Jadwal</a></button>
    </div>

    <!-- Dropdown Contact -->
    <div class="relative group">
      <button id="button-contact" class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">Contact</button>
    </div>

    <!-- Tombol Login (Desktop) -->
    @auth
    <div>
      <form method="POST" action="{{ route('logouts') }}">
        @csrf
        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-full shadow 
              transition-all duration-300 ease-out
              hover:bg-gray-700 hover:text-white hover:shadow-xl hover:-translate-y-1 hover:scale-105">
          <span class="ml-2">Logout</span>
        </button>
      </form>
    </div>
    @endauth
    @guest
    <div>
      <a href="{{ route('login') }}" class="bg-gray-800 text-white px-4 py-2 rounded-full shadow 
            transition-all duration-300 ease-out
            hover:bg-gray-700 hover:text-white hover:shadow-xl hover:-translate-y-1 hover:scale-105">
        <span class="ml-2">Masuk</span>
      </a>
    </div>
    @endguest
  </div>
</nav>

<!-- Mobile Menu (Terpisah dari navbar untuk menghindari masalah dengan fixed position) -->
<div id="mobile-menu" class="fixed inset-0 bg-white z-50 hidden flex-col pt-16 pb-6 px-4 w-full h-full overflow-y-auto md:hidden">
  <button id="close-menu-button" class="absolute top-4 right-4 text-gray-800">
    <span class="material-icons">close</span>
  </button>

  <!-- Mobile Menu Items -->
  <div class="space-y-4 mt-6">
    <!-- Home -->
    <div class="border-b border-gray-200 pb-2">
      <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold"><a href="{{ route('home') }}">Home</a></button>
    </div>

    <!-- Tentang Kami -->
    <div class="border-b border-gray-200 pb-2">
      <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">
        Tentang Kami <span class="material-icons transition-transform duration-200">arrow_drop_down</span>
      </button>
      <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
        <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Visi dan Misi</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Struktur Organisasi</a>
      </div>
    </div>

    <!-- Fasilitas -->
    <div class="border-b border-gray-200 pb-2">
      <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">
        Fasilitas <span class="material-icons transition-transform duration-200">arrow_drop_down</span>
      </button>
      <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
        <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Alat Laboratorium</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Coming Soon</a>
      </div>
    </div>

    <!-- Layanan -->
    <div class="border-b border-gray-200 pb-2">
      <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">
        Layanan <span class="material-icons transition-transform duration-200">arrow_drop_down</span>
      </button>
      <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
        <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Peminjaman Ruang</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Peminjaman Alat</a>
      </div>
    </div>

    <!-- Jadwal -->
    <div class="border-b border-gray-200 pb-2">
      <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold"><a href="{{ route('jadwal') }}">Jadwal</a></button>
    </div>

    <!-- Contact -->
    <div class="border-b border-gray-200 pb-2">
      <button id="button-contact" class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">Contact</button>
    </div>

    <!-- Tombol Login (Mobile) -->
    <div class="mt-4">
      <a href="{{ route('login') }}" class="block w-full bg-gray-800 text-white px-4 py-3 text-center rounded-full shadow 
            transition-all duration-300 ease-out hover:bg-gray-700">
        Masuk
      </a>
    </div>
  </div>
</div>