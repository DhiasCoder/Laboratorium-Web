<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Lab</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>

<body class="bg-gradient-to-r from-blue-600 to-sky-300 text-white overflow-x-hidden">
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
    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
            <path fill="#3b82f6" fill-opacity="1"
                d="M0,160L60,149.3C120,139,240,117,360,138.7C480,160,600,224,720,224C840,224,960,160,1080,144C1200,128,1320,160,1380,176L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
            <path fill="#6366f1" fill-opacity="0.7"
                d="M0,288L80,256C160,224,320,160,480,165.3C640,171,800,245,960,272C1120,299,1280,277,1360,266.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>
    <div class="bg-white min-h-full py-16">
        <div class="flex flex-col container mx-auto pb-10">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Prodi
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Mata Kuliah
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Lab
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
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
            </div>
            <div class="flex justify-center mt-8">
                <a data-aos="fade-right" data-aos-delay="100" href="{{ route('home') }}" class="bg-gray-800 text-white px-6 py-3 rounded-lg font-bold hover:bg-orange-500 transition transform hover:scale-105">Kembali</a>
                <a data-aos="fade-left" data-aos-delay="100" href="#" class="ml-4 bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition transform hover:scale-105">Isi Formulir</a>
            </div>
        </div>
    </div>
    <script>
        AOS.init({
            duration: 1000,
            once: false
        });
    </script>
</body>

</html>