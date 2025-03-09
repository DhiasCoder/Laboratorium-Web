<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorium Raden Fatah</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>

<body class="bg-gradient-to-r from-blue-600 to-sky-300 text-white overflow-x-hidden">
    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 w-full bg-white shadow-md z-50 transition-all duration-300 ease-out flex items-center justify-between px-4 sm:px-6 py-3"
        data-aos="fade-down" data-aos-delay="300">

        <!-- Logo -->
        <div class="flex items-center gap-x-2 sm:gap-x-3">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('assets/images/logouin.png') }}" alt="Logo" class="h-8 sm:h-10 w-auto">
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
                <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">
                    Home <span class="material-icons">arrow_drop_down</span>
                </button>
                <div class="absolute hidden bg-white shadow-md rounded-md border border-indigo-300 group-hover:block w-52">
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Submenu 1</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Submenu 2</a>
                </div>
            </div>

            <!-- Dropdown Tentang -->
            <div class="relative group">
                <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">
                    Tentang Kami <span class="material-icons">arrow_drop_down</span>
                </button>
                <div class="absolute hidden bg-white shadow-md rounded-md border border-indigo-300 group-hover:block w-52">
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Layanan 1</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Layanan 2</a>
                </div>
            </div>

            <!-- Dropdown Fasilitas -->
            <div class="relative group">
                <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">
                    Fasilitas <span class="material-icons">arrow_drop_down</span>
                </button>
                <div class="absolute hidden bg-white shadow-md rounded-md border border-indigo-300 group-hover:block w-52">
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Layanan 1</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Layanan 2</a>
                </div>
            </div>

            <!-- Dropdown Layanan -->
            <div class="relative group">
                <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">
                    Layanan <span class="material-icons">arrow_drop_down</span>
                </button>
                <div class="absolute hidden bg-white shadow-md rounded-md border border-indigo-300 group-hover:block w-52">
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Layanan 1</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Layanan 2</a>
                </div>
            </div>

            <!-- Dropdown Jadwal -->
            <div class="relative group">
                <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">Jadwal</button>
                <div class="absolute hidden bg-white shadow-md rounded-md border border-indigo-300 group-hover:block w-52">
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Layanan 1</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Layanan 2</a>
                </div>
            </div>

            <!-- Dropdown Contact -->
            <div class="relative group">
                <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">Contact</button>
                <div class="absolute hidden bg-white shadow-md rounded-md border border-indigo-300 group-hover:block w-52">
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Email</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gradient-to-r from-blue-300 to-sky-600 text-black">Phone</a>
                </div>
            </div>

            <!-- Tombol Login (Desktop) -->
            <div>
                <a href="{{ route('login') }}" class="bg-gray-800 text-white px-4 py-2 rounded-full shadow 
            transition-all duration-300 ease-out
            hover:bg-gray-700 hover:text-white hover:shadow-xl hover:-translate-y-1 hover:scale-105">
                    Masuk
                </a>
            </div>
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
                <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">
                    Home <span class="material-icons transition-transform duration-200">arrow_drop_down</span>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Submenu 1</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Submenu 2</a>
                </div>
            </div>

            <!-- Tentang Kami -->
            <div class="border-b border-gray-200 pb-2">
                <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">
                    Tentang Kami <span class="material-icons transition-transform duration-200">arrow_drop_down</span>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Layanan 1</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Layanan 2</a>
                </div>
            </div>

            <!-- Fasilitas -->
            <div class="border-b border-gray-200 pb-2">
                <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">
                    Fasilitas <span class="material-icons transition-transform duration-200">arrow_drop_down</span>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Layanan 1</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Layanan 2</a>
                </div>
            </div>

            <!-- Layanan -->
            <div class="border-b border-gray-200 pb-2">
                <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">
                    Layanan <span class="material-icons transition-transform duration-200">arrow_drop_down</span>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Layanan 1</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Layanan 2</a>
                </div>
            </div>

            <!-- Jadwal -->
            <div class="border-b border-gray-200 pb-2">
                <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">
                    Jadwal <span class="material-icons transition-transform duration-200">arrow_drop_down</span>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Layanan 1</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Layanan 2</a>
                </div>
            </div>

            <!-- Contact -->
            <div class="border-b border-gray-200 pb-2">
                <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">
                    Contact <span class="material-icons transition-transform duration-200">arrow_drop_down</span>
                </button>
                <div class="mobile-dropdown-content hidden pl-4 mt-2 space-y-2">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Email</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Phone</a>
                </div>
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

    <script>
        AOS.init({
            once: false, // Animasi hanya berjalan sekali
        });
        // Pastikan script berjalan setelah DOM sepenuhnya dimuat
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM fully loaded'); // Debug log

            // Dapatkan referensi ke elemen-elemen yang diperlukan
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const closeMenuButton = document.getElementById('close-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            // Periksa apakah elemen ditemukan
            console.log('Menu button found:', mobileMenuButton !== null); // Debug log
            console.log('Close button found:', closeMenuButton !== null); // Debug log
            console.log('Mobile menu found:', mobileMenu !== null); // Debug log

            // Tambahkan event listener untuk tombol hamburger menu
            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', function() {
                    console.log('Menu button clicked'); // Debug log
                    if (mobileMenu) {
                        mobileMenu.classList.remove('hidden');
                        mobileMenu.classList.add('flex');
                        document.body.style.overflow = 'hidden'; // Mencegah scrolling
                        console.log('Mobile menu opened'); // Debug log
                    }
                });
            }

            // Tambahkan event listener untuk tombol close
            if (closeMenuButton) {
                closeMenuButton.addEventListener('click', function() {
                    console.log('Close button clicked'); // Debug log
                    if (mobileMenu) {
                        mobileMenu.classList.add('hidden');
                        mobileMenu.classList.remove('flex');
                        document.body.style.overflow = ''; // Mengaktifkan kembali scrolling
                        console.log('Mobile menu closed'); // Debug log
                    }
                });
            }

            // Toggle untuk dropdown menu mobile
            const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
            console.log('Dropdown toggles found:', mobileDropdownToggles.length); // Debug log

            mobileDropdownToggles.forEach((toggle, index) => {
                toggle.addEventListener('click', function() {
                    console.log('Dropdown toggle clicked:', index); // Debug log

                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.material-icons');

                    if (content && icon) {
                        if (content.classList.contains('hidden')) {
                            content.classList.remove('hidden');
                            icon.textContent = 'arrow_drop_up';
                            icon.style.transform = 'rotate(180deg)';
                            console.log('Dropdown opened:', index); // Debug log
                        } else {
                            content.classList.add('hidden');
                            icon.textContent = 'arrow_drop_down';
                            icon.style.transform = 'rotate(0deg)';
                            console.log('Dropdown closed:', index); // Debug log
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>