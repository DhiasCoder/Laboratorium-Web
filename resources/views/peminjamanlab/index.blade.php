<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorium Raden Fatah</title>
    @include('layouts.style')
</head>

<body class="bg-gradient-to-r from-blue-600 to-sky-300 text-white">
    <!-- Tombol Panah ke Bawah -->
    <div class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 z-10">
        <button id="scroll-button" class="animate-bounce bg-white bg-opacity-80 rounded-full shadow-lg transition hover:bg-opacity-100 hover:scale-110 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

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
                Prosedur Peminjaman Laboratorium
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                <!-- Step Items -->
                <div class="flex items-start" data-aos="fade-right" data-aos-delay="100">
                    <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">1</div>
                    <div class="ml-4 max-w-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Cek Ketersediaan Ruang</h3>
                        <p class="text-sm sm:text-base text-gray-700 mt-2">Pastikan ruang yang ingin dipinjam tidak sedang digunakan atau dalam perbaikan. Bisa dilakukan via <b>WhatsApp</b> atau langsung ke <b>Ruang Pengelola</b>.</p>
                    </div>
                </div>

                <div class="flex items-start" data-aos="fade-left" data-aos-delay="200">
                    <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">2</div>
                    <div class="ml-4 max-w-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Mengisi Formulir</h3>
                        <p class="text-sm sm:text-base text-gray-700 mt-2">Isi formulir peminjaman ruang dengan lengkap di halaman berikut: <a href="#" class="text-blue-600 font-bold hover:underline">Formulir Peminjaman</a>.</p>
                    </div>
                </div>

                <div class="flex items-start" data-aos="fade-right" data-aos-delay="300">
                    <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">3</div>
                    <div class="ml-4 max-w-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Konfirmasi Peminjaman</h3>
                        <p class="text-sm sm:text-base text-gray-700 mt-2">Konfirmasi via <b>WhatsApp</b> setelah mengisi formulir. Jika ada kendala, hubungi kami melalui <a href="mailto:labkom@mipa.uns.ac.id" class="text-blue-600 font-bold hover:underline">Email</a>.</p>
                    </div>
                </div>

                <div class="flex items-start" data-aos="fade-left" data-aos-delay="400">
                    <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">4</div>
                    <div class="ml-4 max-w-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Menunggu Perizinan</h3>
                        <p class="text-sm sm:text-base text-gray-700 mt-2">Dokumen peminjaman akan diproses dalam waktu 1x24 jam. Jika belum ada konfirmasi, silakan hubungi kami.</p>
                    </div>
                </div>

                <div class="flex items-start" data-aos="fade-right" data-aos-delay="500">
                    <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">5</div>
                    <div class="ml-4 max-w-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Cetak Dokumen</h3>
                        <p class="text-sm sm:text-base text-gray-700 mt-2">Dokumen yang didapatkan dicetak dengan kertas ukuran A4.</p>
                    </div>
                </div>

                <div class="flex items-start" data-aos="fade-left" data-aos-delay="600">
                    <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-indigo-500 text-white text-lg font-bold aspect-square">6</div>
                    <div class="ml-4 max-w-sm">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Ambil Kunci</h3>
                        <p class="text-sm sm:text-base text-gray-700 mt-2">Pada saat ingin mengambil kunci di <b>Ruang Pengelola</b>, bawa dokumen yang diperlukan seperti <i>Surat Peminjaman Ruang</i> yang telah diproses dan <i>Kartu Mahasiswa.</i></p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center mt-8 gap-4">
                <a href="{{ route('home') }}" class="bg-gray-800 text-white px-6 py-3 rounded-lg font-bold hover:bg-orange-500 transition transform hover:scale-105">Kembali</a>
                <a href="{{ route('labs-room') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition transform hover:scale-105">Isi Formulir</a>
            </div>
        </div>
    </div>

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