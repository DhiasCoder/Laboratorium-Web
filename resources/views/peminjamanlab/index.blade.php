<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Lab</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>

<body class="bg-gradient-to-r from-blue-600 to-sky-300 text-white overflow-x-hidden">
    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 w-full bg-white shadow-md z-50 transition-all duration-300 ease-out flex items-center justify-between px-6 py-3"
        data-aos="fade-down" data-aos-delay="300">

        <!-- Logo -->
        <div class="flex items-center gap-x-3">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('assets/images/logouin.png') }}" alt="Logo" class="h-10 w-auto">
                <span class="text-xl font-bold text-gray-800">LABORATORIUM</span>
            </a>
        </div>

        <!-- Menu -->
        <div class="flex items-center gap-x-6">
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
        </div>

        <!-- Tombol Login -->
        <div>
            <a href="{{ route('login') }}" class="bg-gray-800 text-white px-4 py-2 rounded-full shadow 
        transition-all duration-300 ease-out
        hover:bg-gray-700 hover:text-white hover:shadow-xl hover:-translate-y-1 hover:scale-105">
                Masuk
            </a>
        </div>
    </nav>

    <div class="hero-container">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="pt-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
                <div class="lg:text-center">
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                        Alur Peminjaman Ruang
                    </p>
                    <p class="mt-2 mb-12 max-w-2xl text-xl text-white lg:mx-auto">
                        di Luar Jam Perkuliahan
                    </p>
                </div>
            </div>
        </div>

        <!-- Tombol Panah ke Bawah -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-10">
            <button id="scroll-button" class="animate-bounce p-4 bg-white bg-opacity-80 rounded-full shadow-lg transition hover:bg-opacity-100 hover:scale-110">
                <svg class="w-8 h-8 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>
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

    <div id="next-section" class="bg-white min-h-full py-16">
        <div class="container mx-auto py-12 px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8" data-aos="fade-down">Prosedur Peminjaman Laboratorium</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Step 1 -->
                <div class="flex items-start" data-aos="fade-right" data-aos-delay="100">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">1</div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">Cek Ketersediaan Ruang</h3>
                        <p class="text-gray-700 mt-2">Pastikan ruang yang ingin dipinjam tidak sedang digunakan atau dalam perbaikan. Bisa dilakukan via <b>WhatsApp</b> atau langsung ke <b>Ruang Pengelola</b>.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="flex items-start" data-aos="fade-left" data-aos-delay="200">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">2</div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">Mengisi Formulir</h3>
                        <p class="text-gray-700 mt-2">Isi formulir peminjaman ruang dengan lengkap di halaman berikut: <a href="#" class="text-blue-600 font-bold hover:underline">Formulir Peminjaman</a>.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="flex items-start" data-aos="fade-right" data-aos-delay="300">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">3</div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">Konfirmasi Peminjaman</h3>
                        <p class="text-gray-700 mt-2">Konfirmasi via <b>WhatsApp</b> setelah mengisi formulir. Jika ada kendala, hubungi kami melalui <a href="mailto:labkom@mipa.uns.ac.id" class="text-blue-600 font-bold hover:underline">Email</a>.</p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="flex items-start" data-aos="fade-left" data-aos-delay="400">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">4</div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">Menunggu Perizinan</h3>
                        <p class="text-gray-700 mt-2">Dokumen peminjaman akan diproses dalam waktu 1x24 jam. Jika belum ada konfirmasi, silakan hubungi kami.</p>
                    </div>
                </div>
                <!-- Step 5 -->
                <div class="flex items-start" data-aos="fade-right" data-aos-delay="500">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">5</div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">Cetak Dokumen</h3>
                        <p class="text-gray-700 mt-2">Dokumen yang di dapatkan di cetak dengan kertas ukuran A4.</p>
                    </div>
                </div>
                <!-- Step 6 -->
                <div class="flex items-start" data-aos="fade-left" data-aos-delay="600">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">6</div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">Ambil Kunci</h3>
                        <p class="text-gray-700 mt-2">Pada saat ingin mengambil kunci di <b>Ruang Pengelola</b>, bawa dokumen yang diperlukan seperti
                            <i>Surat Peminjaman Ruang</i> yang telah diproses dan <i>Kartu Mahasiswa.</i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <a href="{{ route('home') }}" class="bg-gray-800 text-white px-6 py-3 rounded-lg font-bold hover:bg-orange-500 transition transform hover:scale-105">Kembali</a>
                <a href="#" class="ml-4 bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition transform hover:scale-105">Isi Formulir</a>
            </div>
        </div>
    </div>
    <script>
        AOS.init({
            duration: 1000,
            once: false
        });
        document.getElementById("scroll-button").addEventListener("click", function() {
            let targetSection = document.getElementById("next-section");
            let offset = 50; // Atur jarak dari atas
            let targetPosition = targetSection.offsetTop - offset;
            let scrollButton = document.getElementById("scroll-button");

            // Cek posisi scroll, jika masih di atas maka scroll ke bawah, jika sudah ke bawah maka kembali ke atas
            if (window.scrollY < targetPosition - 50) {
                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth"
                });

                // Ubah icon menjadi panah atas
                scrollButton.innerHTML = `
                <svg class="w-8 h-8 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>`;
            } else {
                // Jika sudah di bawah, klik lagi untuk scroll ke atas
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });

                // Ubah kembali ke panah bawah
                scrollButton.innerHTML = `
                <svg class="w-8 h-8 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>`;
            }
        });
    </script>
</body>

</html>