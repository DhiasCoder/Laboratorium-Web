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

<body class="bg-gradient-to-r from-blue-600 to-sky-300 text-white">
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
                <button class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600"><a href="{{ route('home') }}">Home</a></button>
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
            </div>

            <!-- Dropdown Contact -->
            <div class="relative group">
                <button id="button-contact" class="text-gray-800 font-semibold flex items-center gap-x-1 hover:text-gray-600">Contact</button>
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

    <!-- Tombol Panah ke Bawah -->
    <div class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 z-10">
        <button id="scroll-button" class="animate-bounce bg-white bg-opacity-80 rounded-full shadow-lg transition hover:bg-opacity-100 hover:scale-110 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

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
                <button class="mobile-dropdown-toggle w-full text-left flex items-center justify-between text-gray-800 font-semibold">Jadwal</button>
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

    <div class="hero-container">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="pt-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
                <div class="lg:text-center">
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                        Alur Peminjaman Alat
                    </p>
                    <p class="mt-2 mb-12 max-w-2xl text-xl text-white lg:mx-auto">
                        di Luar Jam Perkuliahan
                    </p>
                </div>
            </div>
        </div>

        <div class="relative h-96 md:h-[500px] bg-cover bg-center bg-no-repeat flex items-center justify-center text-white"
            style="background-image: url('https://labterpadu.radenfatah.ac.id/wp-content/uploads/2023/01/cropped-IMG_5649-scaled-1-1536x962.jpg');">

            <!-- Overlay agar teks lebih jelas -->
            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-40">
                <h1 data-aos="fade-right" data-aos-delay="100" class="text-5xl md:text-6xl font-bold">Laboratorium Terpadu</h1>
                <h2 data-aos="fade-left" data-aos-delay="100" class="text-2xl md:text-3xl mt-2">Eksplorasi Ilmu, Menciptakan Solusi Nyata</h2>
            </div>

            <!-- SVG tetap di dalam gambar & tidak berubah bentuk -->
            <svg class="absolute bottom-0 left-0 w-full h-auto" viewBox="0 0 1440 250"
                preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="#3b82f6" fill-opacity="1"
                    d="M0,160L60,149.3C120,139,240,117,360,138.7C480,160,600,224,720,224C840,224,960,160,1080,144C1200,128,1320,160,1380,176L1440,192L1440,250L1380,250C1320,250,1200,250,1080,250C960,250,840,250,720,250C600,250,480,250,360,250C240,250,120,250,60,250L0,250Z">
                </path>
                <path fill="#6366f1" fill-opacity="0.7"
                    d="M0,220L80,200C160,180,320,140,480,145.3C640,151,800,195,960,220C1120,245,1280,230,1360,220L1440,210L1440,250L1360,250C1280,250,1120,250,960,250C800,250,640,250,480,250C320,250,160,250,80,250L0,250Z">
                </path>
            </svg>
        </div>
    </div>

    <div id="next-section" class="bg-white min-h-screen py-16 overflow-hidden">
        <div class="container max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8" data-aos="fade-down">
                Prosedur Peminjaman Alat
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                <!-- Step Items -->
                <div class="flex items-start" data-aos="fade-right" data-aos-delay="100">
                    <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">1</div>
                    <div class="ml-4 max-w-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Mengisi Data Diri</h3>
                        <p class="text-sm sm:text-base text-gray-700 mt-2">Mengisi data diri untuk pembuatan <i>Surat Bebas Labkom</i> di
                            halaman berikut: <a href="#"
                                class="text-blue-600 font-bold hover:underline">Formulir Surat Bebas Labkom</a>.</p>
                    </div>
                </div>

                <div class="flex items-start" data-aos="fade-left" data-aos-delay="200">
                    <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">2</div>
                    <div class="ml-4 max-w-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Konfirmasi Surat Bebas Labkom</h3>
                        <p class="text-sm sm:text-base text-gray-700 mt-2">Setelah mengisi formulir, konfirmasi dapat dilakukan melalui <i>chat</i> <b>WhatsApp</b> yang terakses otomatis. Jika ada kendala, silakan ajukan keluhan melalui <b><a href='mailto:labkom@mipa.uns.ac.id' class='text-blue-600 font-bold hover:underline'>Email</a></b>.</p>
                    </div>
                </div>

                <div class="flex items-start" data-aos="fade-right" data-aos-delay="300">
                    <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">3</div>
                    <div class="ml-4 max-w-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Konfirmasi Dokumen</h3>
                        <p class="text-sm sm:text-base text-gray-700 mt-2">Tunggu hingga kami mengirimkan dokumen surat bebas labkom yang sudah diproses. Jika dalam kurun waktu 1 x 24 jam belum ada balasan konfirmasi dari kami, silakan ajukan keluhan lewat <b><a href="mailto:labkom@mipa.uns.ac.id" class="text-blue-600 font-bold hover:underline">Email</a></b> kami.</p>
                    </div>
                </div>

                <div class="flex items-start" data-aos="fade-left" data-aos-delay="400">
                    <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">4</div>
                    <div class="ml-4 max-w-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Cetak & Simpan Dokumen</h3>
                        <p class="text-sm sm:text-base text-gray-700 mt-2">Cetak dokumen dengan kertas ukuran A4 lalu simpan dokumen yang sudah dicetak tersebut.</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center mt-8 gap-4">
                <a href="{{ route('home') }}" class="bg-gray-800 text-white px-6 py-3 rounded-lg font-bold hover:bg-orange-500 transition transform hover:scale-105">Kembali</a>
                <a href="{{ route('peminjamanalat.create') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition transform hover:scale-105">Isi Formulir</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="fotter-section" class="bg-gray-900 text-white py-8 px-4 mt-auto w-full">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-4 text-center md:text-left">
            <div>
                <h3 class="text-lg font-semibold">Laboratorium Terpadu</h3>
                <p class="text-gray-400">Menyediakan fasilitas laboratorium modern dan lengkap untuk kegiatan praktikum, penelitian, dan pengembangan.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold">Kontak Kami</h3>
                <p class="text-gray-400">Jl. Pangeran Ratu, 5 Ulu, Kecamatan Seberang Ulu I, Kota Palembang, Sumatera Selatan 30267</p>
                <p class="text-gray-400">(021) 1234-5678</p>
                <p class="text-gray-400">labter@uinrafa.ac.id</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold">Jam Operasional</h3>
                <p class="text-gray-400">Senin - Kamis: 07.30 - 04.00</p>
                <p class="text-gray-400">Jumat: 07.30 - 04.30</p>
                <p class="text-gray-400">Sabtu-Minggu & Hari Libur: Tutup</p>
            </div>
        </div>
        <div class="text-center text-gray-500 mt-6">
            © 2025 Laboratorium Terpadu. Hak Cipta Dilindungi.
        </div>
    </footer>

    <script>
        AOS.init({
            duration: 1000,
            once: false
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
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("button-contact").addEventListener("click", function() {
                let targetSection = document.getElementById("fotter-section");
                let offset = 50; // Ubah nilai ini untuk mengatur jarak dari atas (misal: navbar tinggi 50px)
                let targetPosition = targetSection.offsetTop - offset;

                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth"
                });
            });
            let scrollButton = document.getElementById("scroll-button");
            let buttonContainer = scrollButton.parentElement;
            let targetSection = document.getElementById("next-section");

            function updateButtonState() {
                if (window.scrollY === 0) {
                    // Jika sudah di paling atas, ubah ke panah ke bawah
                    scrollButton.innerHTML = `
            <svg class="w-8 h-8 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>`;
                    scrollButton.dataset.direction = "down"; // Set status tombol
                } else {
                    // Jika sedang di bawah, ubah ke panah ke atas
                    scrollButton.innerHTML = `
            <svg class="w-8 h-8 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>`;
                    scrollButton.dataset.direction = "up"; // Set status tombol
                }
            }

            // Event listener untuk mendeteksi scroll
            window.addEventListener("scroll", updateButtonState);

            // Event listener untuk tombol scroll
            scrollButton.addEventListener("click", function() {
                if (scrollButton.dataset.direction === "down") {
                    // Scroll ke bawah ke next-section
                    let offset = 50;
                    let targetPosition = targetSection.offsetTop - offset;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: "smooth"
                    });

                    // Pindahkan tombol ke kanan bawah
                    setTimeout(() => {
                        buttonContainer.style.position = "fixed";
                        buttonContainer.style.right = "1.5rem";
                        buttonContainer.style.bottom = "1.5rem";
                        buttonContainer.style.left = "unset";
                        buttonContainer.style.zIndex = "100";
                    }, 500);

                    scrollButton.dataset.direction = "up"; // Ubah status ke atas
                } else {
                    // Scroll ke atas jika tombol diklik saat sudah di bawah
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    });

                    // Tetap di kanan bawah
                    setTimeout(() => {
                        buttonContainer.style.position = "fixed";
                        buttonContainer.style.right = "1.5rem";
                        buttonContainer.style.bottom = "1.5rem";
                        buttonContainer.style.left = "unset";
                    }, 500);

                    scrollButton.dataset.direction = "down"; // Ubah status ke bawah
                }
            });

            // Inisialisasi awal saat halaman dimuat
            updateButtonState();
        });
    </script>
</body>

</html>