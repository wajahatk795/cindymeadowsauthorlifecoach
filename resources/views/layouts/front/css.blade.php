
<!-- Preconnect: maximum 4 origins -->
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Bootstrap CSS: non-blocking -->
<link rel="preload"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'">

<noscript>
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</noscript>

<!-- Font Awesome -->
<link rel="preload"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'">

<noscript>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</noscript>

<!-- Owl Carousel CSS -->
<link rel="preload"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'">

<noscript>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
</noscript>

<link rel="preload"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'">

<noscript>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</noscript>

<!-- Animate CSS -->
<link rel="preload"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'">

<noscript>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</noscript>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet">

<!-- Local CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/inner.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/reponsive.css') }}">

<!-- Dynamic favicon -->
<link rel="icon" href="{{ isset($favicon) && $favicon ? asset($favicon->img_path) : asset('assets/images/favicon.png') }}">
