<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Alat Laboratorium Terpadu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body class="bg-gray-50 min-h-screen">
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
            <div class="mb-6">
                <div class="flex items-center space-x-2 text-gray-500 text-sm">
                    <a href="#" class="hover:text-blue-600">Beranda</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <a href="#" class="hover:text-blue-600">Peminjaman</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <span class="text-blue-600 font-medium">Peminjaman Alat</span>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-6 py-4">
                    <div class="flex items-center">
                        <i class="fas fa-tools text-3xl mr-3 text-white opacity-80"></i>
                        <div>
                            <h2 class="text-xl font-bold text-white">Form Peminjaman Alat Laboratorium</h2>
                            <p class="text-blue-100">Silakan isi data dengan lengkap dan benar</p>
                        </div>
                    </div>
                </div>

                <form class="p-6">
                    <!-- Informasi Peminjam -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4 flex items-center">
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
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="status">
                                    Status <span class="text-red-500">*</span>
                                </label>
                                <select id="status" name="status" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Pilih Status</option>
                                    <option value="mahasiswa">Mahasiswa</option>
                                    <option value="dosen">Dosen</option>
                                    <option value="staff">Staff</option>
                                    <option value="peneliti">Peneliti</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="jurusan">
                                    Jurusan/Departemen <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="jurusan" name="jurusan" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Alat -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4 flex items-center">
                            <i class="fas fa-microscope mr-2 text-blue-600"></i>Informasi Alat
                        </h3>

                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
                            <p class="text-sm text-blue-800">
                                <i class="fas fa-info-circle mr-2"></i>
                                Anda dapat meminjam maksimal 5 alat laboratorium dalam satu kali permohonan.
                            </p>
                        </div>

                        <div id="alat-container">
                            <!-- Alat 1 -->
                            <div class="alat-item bg-gray-50 rounded-lg p-4 mb-4 border border-gray-200">
                                <div class="flex justify-between items-center mb-3">
                                    <h4 class="font-medium text-blue-700">Alat #1</h4>
                                    <span class="text-red-500">*</span>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-gray-700 text-sm font-medium mb-2" for="kategori_alat_1">
                                            Kategori Alat <span class="text-red-500">*</span>
                                        </label>
                                        <select id="kategori_alat_1" name="kategori_alat_1" required
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            <option value="">Pilih Kategori</option>
                                            <option value="optik">Alat Optik</option>
                                            <option value="ukur">Alat Ukur</option>
                                            <option value="kimia">Alat Kimia</option>
                                            <option value="elektronik">Alat Elektronik</option>
                                            <option value="mekanik">Alat Mekanik</option>
                                            <option value="biologi">Alat Biologi</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-gray-700 text-sm font-medium mb-2" for="nama_alat_1">
                                            Nama Alat <span class="text-red-500">*</span>
                                        </label>
                                        <select id="nama_alat_1" name="nama_alat_1" required
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            <option value="">Pilih Alat</option>
                                            <option value="mikroskop">Mikroskop</option>
                                            <option value="spektrofotometer">Spektrofotometer</option>
                                            <option value="ph_meter">pH Meter</option>
                                            <option value="neraca_analitik">Neraca Analitik</option>
                                            <option value="hot_plate">Hot Plate</option>
                                            <option value="oven">Oven Laboratorium</option>
                                            <option value="autoclave">Autoclave</option>
                                            <option value="sentrifugasi">Sentrifugasi</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-gray-700 text-sm font-medium mb-2" for="kode_alat_1">
                                            Kode Alat <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="kode_alat_1" name="kode_alat_1" required
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan Kode Alat">
                                    </div>

                                    <div>
                                        <label class="block text-gray-700 text-sm font-medium mb-2" for="jumlah_1">
                                            Jumlah <span class="text-red-500">*</span>
                                        </label>
                                        <input type="number" id="jumlah_1" name="jumlah_1" min="1" value="1" required
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    </div>

                                    <div class="md:col-span-2">
                                        <label class="block text-gray-700 text-sm font-medium mb-2" for="keperluan_1">
                                            Keperluan Penggunaan <span class="text-red-500">*</span>
                                        </label>
                                        <textarea id="keperluan_1" name="keperluan_1" rows="2" required
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Jelaskan keperluan alat"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="button" class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-700 border border-blue-300 rounded-lg hover:bg-blue-200 transition">
                                    <i class="fas fa-plus mr-2"></i> Tambah Alat Lain
                                </button>
                            </div>
                        </div>

                        <!-- Informasi Waktu -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4 flex items-center">
                                <i class="fas fa-clock mr-2 text-blue-600"></i>Informasi Waktu Peminjaman
                            </h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="tanggal_pinjam">
                                        Tanggal Pinjam <span class="text-red-500">*</span>
                                    </label>
                                    <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="tanggal_kembali">
                                        Tanggal Kembali <span class="text-red-500">*</span>
                                    </label>
                                    <input type="date" id="tanggal_kembali" name="tanggal_kembali" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="waktu_pinjam">
                                        Waktu Pengambilan <span class="text-red-500">*</span>
                                    </label>
                                    <input type="time" id="waktu_pinjam" name="waktu_pinjam" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="lokasi_penggunaan">
                                        Lokasi Penggunaan <span class="text-red-500">*</span>
                                    </label>
                                    <select id="lokasi_penggunaan" name="lokasi_penggunaan" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option value="">Pilih Lokasi</option>
                                        <option value="dalam_lab">Di Dalam Lab</option>
                                        <option value="luar_lab">Di Luar Lab (Dalam Kampus)</option>
                                        <option value="luar_kampus">Di Luar Kampus</option>
                                    </select>
                                </div>

                                <div class="md:col-span-2">
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="detail_lokasi">
                                        Detail Lokasi Penggunaan <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="detail_lokasi" name="detail_lokasi" rows="2" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Dokumen Pendukung -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4 flex items-center">
                                <i class="fas fa-file-alt mr-2 text-blue-600"></i>Dokumen Pendukung
                            </h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="surat_permohonan">
                                        Surat Permohonan <span class="text-red-500">*</span>
                                    </label>
                                    <div class="flex items-center justify-center w-full">
                                        <label for="surat_permohonan" class="flex flex-col items-center justify-center w-full h-32 border-2 border-blue-300 border-dashed rounded-lg cursor-pointer bg-blue-50 hover:bg-blue-100">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <i class="fas fa-cloud-upload-alt text-3xl text-blue-500 mb-2"></i>
                                                <p class="mb-1 text-sm text-gray-600">Klik untuk upload file</p>
                                                <p class="text-xs text-gray-500">PDF atau JPG (Maks. 2MB)</p>
                                            </div>
                                            <input id="surat_permohonan" type="file" class="hidden" required />
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="kartu_identitas">
                                        Kartu Identitas <span class="text-red-500">*</span>
                                    </label>
                                    <div class="flex items-center justify-center w-full">
                                        <label for="kartu_identitas" class="flex flex-col items-center justify-center w-full h-32 border-2 border-blue-300 border-dashed rounded-lg cursor-pointer bg-blue-50 hover:bg-blue-100">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <i class="fas fa-cloud-upload-alt text-3xl text-blue-500 mb-2"></i>
                                                <p class="mb-1 text-sm text-gray-600">Klik untuk upload file</p>
                                                <p class="text-xs text-gray-500">PDF atau JPG (Maks. 2MB)</p>
                                            </div>
                                            <input id="kartu_identitas" type="file" class="hidden" required />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Info Persetujuan -->
                        <div class="mb-6 bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                            <h3 class="text-md font-semibold text-yellow-800 mb-2 flex items-center">
                                <i class="fas fa-exclamation-triangle mr-2"></i>Informasi Penting
                            </h3>
                            <ul class="list-disc pl-5 text-sm text-yellow-800 space-y-1">
                                <li>Peminjam bertanggung jawab penuh atas alat yang dipinjam</li>
                                <li>Pengembalian alat harus sesuai dengan jadwal yang telah ditentukan</li>
                                <li>Kerusakan/kehilangan alat menjadi tanggung jawab peminjam</li>
                                <li>Terlambat mengembalikan akan dikenakan denda sesuai peraturan</li>
                                <li>Pengambilan alat dilakukan oleh peminjam sendiri dengan menunjukkan kartu identitas asli</li>
                            </ul>
                        </div>

                        <!-- Persetujuan -->
                        <div class="mb-6">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="persetujuan" type="checkbox" required class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                </div>
                                <label for="persetujuan" class="ml-2 text-sm text-gray-600">
                                    Saya menyatakan bahwa informasi yang saya berikan adalah benar dan saya akan bertanggung jawab atas alat yang saya pinjam serta akan mematuhi seluruh peraturan yang berlaku. <span class="text-red-500">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="flex flex-col md:flex-row justify-end space-y-4 md:space-y-0 md:space-x-4">
                            <button type="reset" class="px-6 py-2 bg-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-400 transition">
                                <i class="fas fa-undo mr-2"></i>Reset
                            </button>
                            <button type="submit" class="px-6 py-2 bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-medium rounded-lg hover:from-blue-700 hover:to-indigo-800 transition">
                                <i class="fas fa-paper-plane mr-2"></i>Kirim Permohonan
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
            const alatContainer = document.getElementById("alat-container");

            // Event listener untuk tombol "Tambah Alat Lain"
            document.querySelector("button:has(.fa-plus)").addEventListener("click", function() {
                const alatCount = document.querySelectorAll(".alat-item").length + 1;

                if (alatCount > 5) {
                    alert("Maksimal 5 alat dapat dipinjam!");
                    return;
                }

                const alatHTML = `
                <div class="alat-item bg-gray-50 rounded-lg p-4 mb-4 border border-gray-200">
                <div class="flex justify-between items-center mb-3">
                    <h4 class="font-medium text-blue-700">Alat #${alatCount}</h4>
                    <button type="button" class="hapus-alat text-red-500 hover:text-red-700">
                    <i class="fas fa-times-circle"></i> Hapus
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">Kategori Alat</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        <option value="">Pilih Kategori</option>
                        <option value="optik">Alat Optik</option>
                        <option value="ukur">Alat Ukur</option>
                        <option value="kimia">Alat Kimia</option>
                        <option value="elektronik">Alat Elektronik</option>
                        <option value="mekanik">Alat Mekanik</option>
                        <option value="biologi">Alat Biologi</option>
                    </select>
                    </div>

                    <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">Nama Alat</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Masukkan Nama Alat">
                    </div>

                    <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">Kode Alat</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Masukkan Kode Alat">
                    </div>

                    <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">Jumlah</label>
                    <input type="number" min="1" value="1" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="md:col-span-2">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Keperluan Penggunaan</label>
                    <textarea rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Jelaskan keperluan alat"></textarea>
                    </div>
                </div>
                </div>
            `;

                alatContainer.insertAdjacentHTML("beforeend", alatHTML);
            });

            // Event listener untuk tombol "Hapus"
            alatContainer.addEventListener("click", function(e) {
                if (e.target.closest(".hapus-alat")) {
                    e.target.closest(".alat-item").remove();
                }
            });
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