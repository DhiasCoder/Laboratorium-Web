<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Ltpd-UinRafa')</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body class="min-h-screen flex flex-col">
  <!-- partial:partials/_navbar.html -->
  @include('partials.navbar')
  <!-- partial:partials/_footer.html -->
  @include('partials.footer')
  <script>
    AOS.init({
      once: false, // Animasi hanya berjalan sekali
    });
    document.addEventListener("DOMContentLoaded", function() {
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
      document.getElementById("button-contact").addEventListener("click", function() {
        let targetSection = document.getElementById("footer-section");
        let offset = 50; // Ubah nilai ini untuk mengatur jarak dari atas (misal: navbar tinggi 50px)
        let targetPosition = targetSection.offsetTop - offset;

        window.scrollTo({
          top: targetPosition,
          behavior: "smooth"
        });
      });
    });
  </script>
</body>

</html>