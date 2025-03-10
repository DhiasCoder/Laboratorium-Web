<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Laboratorium Terpadu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body class="bg-gray-100 min-h-screen">
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

    <div class="container mx-auto px-4 py-8 mt-10">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">Form Peminjaman Laboratorium</h2>
                    <p class="text-blue-100">Silakan isi data dengan lengkap dan benar</p>
                </div>

                <form class="p-6">
                    <!-- Informasi Peminjam -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">
                            <i class="fas fa-user-circle mr-2 text-blue-600"></i>Informasi Peminjam
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="nama">
                                    Nama Lengkap <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="nama" name="nama" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="nim">
                                    NIM/NIP <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="nim" name="nim" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="email">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="telepon">
                                    Nomor Telepon <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="telepon" name="telepon" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="jurusan">
                                    Jurusan/Departemen <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="jurusan" name="jurusan" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="fakultas">
                                    Fakultas <span class="text-red-500">*</span>
                                </label>
                                <select id="fakultas" name="fakultas" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Pilih Fakultas</option>
                                    <option value="fmipa">FMIPA</option>
                                    <option value="fikes">FIKES</option>
                                    <option value="ft">FT</option>
                                    <option value="fkip">FKIP</option>
                                    <option value="feb">FEB</option>
                                    <option value="fisip">FISIP</option>
                                    <option value="fh">FH</option>
                                    <option value="pascasarjana">Pascasarjana</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Laboratorium -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">
                            <i class="fas fa-flask mr-2 text-blue-600"></i>Informasi Laboratorium
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="jenis_lab">
                                    Jenis Laboratorium <span class="text-red-500">*</span>
                                </label>
                                <select id="jenis_lab" name="jenis_lab" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Pilih Laboratorium</option>
                                    <option value="kimia">Lab Kimia</option>
                                    <option value="fisika">Lab Fisika</option>
                                    <option value="biologi">Lab Biologi</option>
                                    <option value="komputer">Lab Komputer</option>
                                    <option value="multimedia">Lab Multimedia</option>
                                    <option value="bahasa">Lab Bahasa</option>
                                    <option value="rekayasa">Lab Rekayasa</option>
                                    <option value="farmasi">Lab Farmasi</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="ruangan">
                                    Ruangan <span class="text-red-500">*</span>
                                </label>
                                <select id="ruangan" name="ruangan" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Pilih Ruangan</option>
                                    <option value="lt1-a">Lantai 1 - Ruang A</option>
                                    <option value="lt1-b">Lantai 1 - Ruang B</option>
                                    <option value="lt2-a">Lantai 2 - Ruang A</option>
                                    <option value="lt2-b">Lantai 2 - Ruang B</option>
                                    <option value="lt3-a">Lantai 3 - Ruang A</option>
                                    <option value="lt3-b">Lantai 3 - Ruang B</option>
                                </select>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="keperluan">
                                    Keperluan Penggunaan <span class="text-red-500">*</span>
                                </label>
                                <textarea id="keperluan" name="keperluan" rows="3" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Waktu -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">
                            <i class="fas fa-clock mr-2 text-blue-600"></i>Informasi Waktu
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="tanggal_mulai">
                                    Tanggal Mulai <span class="text-red-500">*</span>
                                </label>
                                <input type="date" id="tanggal_mulai" name="tanggal_mulai" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="tanggal_selesai">
                                    Tanggal Selesai <span class="text-red-500">*</span>
                                </label>
                                <input type="date" id="tanggal_selesai" name="tanggal_selesai" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="waktu_mulai">
                                    Waktu Mulai <span class="text-red-500">*</span>
                                </label>
                                <input type="time" id="waktu_mulai" name="waktu_mulai" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="waktu_selesai">
                                    Waktu Selesai <span class="text-red-500">*</span>
                                </label>
                                <input type="time" id="waktu_selesai" name="waktu_selesai" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Peralatan Tambahan -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">
                            <i class="fas fa-tools mr-2 text-blue-600"></i>Peralatan Tambahan
                        </h3>

                        <div class="grid grid-cols-1 gap-4">
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="projector" name="peralatan[]" value="projector" class="h-5 w-5 text-blue-600">
                                    <label for="projector" class="ml-2 text-gray-700">Proyektor</label>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" id="speaker" name="peralatan[]" value="speaker" class="h-5 w-5 text-blue-600">
                                    <label for="speaker" class="ml-2 text-gray-700">Speaker</label>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" id="laptop" name="peralatan[]" value="laptop" class="h-5 w-5 text-blue-600">
                                    <label for="laptop" class="ml-2 text-gray-700">Laptop</label>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" id="microscope" name="peralatan[]" value="microscope" class="h-5 w-5 text-blue-600">
                                    <label for="microscope" class="ml-2 text-gray-700">Mikroskop</label>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" id="whiteboard" name="peralatan[]" value="whiteboard" class="h-5 w-5 text-blue-600">
                                    <label for="whiteboard" class="ml-2 text-gray-700">Papan Tulis</label>
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="peralatan_lain">
                                    Peralatan Lain (Sebutkan)
                                </label>
                                <textarea id="peralatan_lain" name="peralatan_lain" rows="2"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- File Pendukung -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4">
                            <i class="fas fa-file-upload mr-2 text-blue-600"></i>File Pendukung
                        </h3>

                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="surat_permohonan">
                                Surat Permohonan <span class="text-red-500">*</span>
                            </label>
                            <div class="flex items-center justify-center w-full">
                                <label for="surat_permohonan" class="flex flex-col items-center justify-center w-full h-32 border-2 border-blue-300 border-dashed rounded-lg cursor-pointer bg-blue-50 hover:bg-blue-100">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <i class="fas fa-cloud-upload-alt text-3xl text-blue-500 mb-2"></i>
                                        <p class="mb-1 text-sm text-gray-600">Klik untuk upload file</p>
                                        <p class="text-xs text-gray-500">PDF, JPG, atau PNG (Maks. 5MB)</p>
                                    </div>
                                    <input id="surat_permohonan" type="file" class="hidden" required />
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Persetujuan -->
                    <div class="mb-6">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="persetujuan" type="checkbox" required class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            </div>
                            <label for="persetujuan" class="ml-2 text-sm text-gray-600">
                                Saya menyatakan bahwa informasi yang saya berikan adalah benar dan saya akan mematuhi seluruh peraturan penggunaan laboratorium. <span class="text-red-500">*</span>
                            </label>
                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="flex flex-col md:flex-row justify-end space-y-4 md:space-y-0 md:space-x-4">
                        <button type="reset" class="px-6 py-2 bg-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-400 transition">
                            Reset
                        </button>
                        <button type="submit" class="px-6 py-2 bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-medium rounded-lg hover:from-blue-700 hover:to-indigo-800 transition">
                            Kirim Permohonan
                        </button>
                    </div>
                </form>
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
                <p class="text-gray-400">Minggu & Hari Libur: Tutup</p>
            </div>
        </div>
        <div class="text-center text-gray-500 mt-6">
            © 2025 Laboratorium Terpadu. Hak Cipta Dilindungi.
        </div>
    </footer>
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
            let targetSection = document.getElementById("fotter-section");

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