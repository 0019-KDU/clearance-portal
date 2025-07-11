<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/basic_styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar {
            width: 100%;
            background-color: var(--mainColor); 
            padding-left: 50px;
            color: white;
            position: fixed;
            top: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            height: 110px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: height 0.3s;
        }

        .logo {
            height: 80px;
            width: auto; 
            padding-right: 30px;
        }

        .header-text h1 {
            color: white;
            font-size: 1.5em;
            margin: 0;
            line-height: 1.1;
            font-weight: bold;
            font-family: var(--title-text);
            cursor: default;
        }

        .navbar-nav {
            list-style-type: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .content {
            margin-left: 250px;
            margin-top: 110px; /* Offset the content by the navbar height */
            padding: 20px;
            width: 100%;
        }

        /* Responsive styles */
        @media (max-width: 900px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                height: auto;
                padding-left: 10px;
                padding-right: 10px;
            }
            .logo {
                height: 60px;
                padding-right: 10px;
            }
            .header-text h1 {
                font-size: 1.1em;
            }
            .content {
                margin-left: 0;
                margin-top: 100px;
                padding: 10px;
            }
        }
        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                height: auto;
                padding: 10px 5px;
            }
            .logo {
                height: 40px;
                padding-right: 5px;
            }
            .header-text h1 {
                font-size: 0.95em;
                line-height: 1.2;
            }
            .content {
                margin-left: 0;
                margin-top: 80px;
                padding: 5px;
            }
            .navbar .hamburger {
                display: block;
            }
        }
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            margin-left: auto;
            margin-right: 10px;
        }
        .hamburger span {
            height: 3px;
            width: 25px;
            background: white;
            margin: 4px 0;
            border-radius: 2px;
            transition: 0.4s;
        }
    </style>
</head>
<body>

    <!-- Top Navbar -->
    <nav class="navbar">
        <div class="d-flex align-items-center" style="width:100%">
            <img src="{{ asset('images/KDU.png') }}" alt="KDU Logo" class="logo">
            <div class="header-text">
                <h1>Clearance Management <br>System - KDU</h1>
            </div>
            <div class="hamburger" id="navbarHamburger" tabindex="0" aria-label="Toggle navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>


    <!-- Content Section -->
    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Hamburger toggle (if you add nav links in the future)
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.getElementById('navbarHamburger');
        if (hamburger) {
            hamburger.addEventListener('click', function() {
                // Example: toggle a nav menu if present
                // document.querySelector('.navbar-nav').classList.toggle('show');
            });
        }
    });
    </script>
</body>
</html>
