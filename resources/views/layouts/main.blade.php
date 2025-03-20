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

<body>
  <!-- partial:partials/_navbar.html -->
  @include('partials.navbar')
  <!-- partial:partials/_footer.html -->
  @include('partials.footer')





  <script>
    AOS.init({
      once: false, // Animasi hanya berjalan sekali
    });
    document.addEventListener("DOMContentLoaded", function() {
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