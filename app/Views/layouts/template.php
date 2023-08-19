<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/styles.css" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Sweet Alert Css -->
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Title -->
    <title>HariQ MC</title>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="nav-container">
            <div class="logo">
                <img src="/img/h-logo_1.png" alt="logo" />
            </div>
            <div class="nav-button">
                <a href="/">Home</a>
                <a href="/store">Store</a>
                <a href="/perks">Perks</a>
                <a href="/rules">Rules</a>
                <a href="/staffs">Staffs</a>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <!-- Font awesome Icon -->
    <script src="https://kit.fontawesome.com/41dbd92bf9.js" crossorigin="anonymous"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- My Script -->
    <script src="/js/script.js"></script>
</body>

</html>