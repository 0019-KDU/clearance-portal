
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

        .sidebar {
            background-color: var(--whiteText);
            background-color: #f9f9f9;
            width: 250px;
            height: 100vh;
            padding: 10px;
            position: fixed;
            top: 110px; /* Align with the height of the top navbar */
            display: flex;
            flex-direction: column;
            align-items: baseline;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: left 0.3s, width 0.3s;
        }

        .sidebar ul {
            padding: 0;
            list-style-type: none;
            width: 100%;
            
        }

        .sidebar ul li {
            margin-bottom: 10px;
            text-align: center;
            
        }

        .sidebar a {
            background-color: #ededed;
            text-decoration: none;
            color:  var(--mainColor);
            font-weight: 500;
            font-size: 16px;
            display: block;
            padding: 10px;
            border-radius: 15px;
            transition: background-color 0.3s;
            height: 50px;
            align-content: center;
        }

        .sidebar a:hover {
            background-color:  var(--mainColor);
            color: var(--whiteText);
            font-weight: bold;
        }
        
        .depName {
            font-size: 20px; /* Font size */
            display: block; /* Make it a block element */
            padding-top: 20px;
            padding-bottom: 10px;
            text-align: center; /* Center the text */
            width: 100%; /* Full width */
            margin: 0; /* Remove default margin */
            cursor: default;
        }

        .sidebar .nav-link.logout-btn{
            margin-top: 0px;
            margin-bottom: 0;
        }


        .sidebar .nav-link.logout-btn:hover {
            background-color: rgb(218, 45, 45);
            color: white;
        }

        .vertical-line {
            width: 2px;                          /* Width of the vertical line */
            background-color: var(--mainColor);  /* Color of the vertical line */
            height: calc(100vh - 110px);         /* Full height minus navbar height */
            position: fixed;                      /* Fix position on the page */
            top: 110px;                           /* Align with the height of the navbar */
            left: 250px;                          /* Align next to the sidebar */
            transition: left 0.3s;
        }

    
        .content {
            margin-left: 250px;
            margin-top: 110px; /* Offset the content by the navbar height */
            padding: 20px;
            width: 100%;
            transition: margin-left 0.3s;
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
        @media (max-width: 768px) {
            .sidebar {
                left: -260px;
                width: 220px;
                z-index: 2000;
                box-shadow: 2px 0 8px rgba(0,0,0,0.15);
                background: #f9f9f9;
                position: fixed;
                top: 110px;
                height: calc(100vh - 110px);
                transition: left 0.3s cubic-bezier(.4,0,.2,1);
            }
            .sidebar.active {
                left: 0;
            }
            .sidebar-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background: rgba(0,0,0,0.3);
                z-index: 1999;
                transition: opacity 0.3s;
            }
            .sidebar-overlay.active {
                display: block;
            }
            .vertical-line {
                left: -9999px;
            }
            .vertical-line.active {
                left: 220px;
            }
            .content {
                margin-left: 0;
                margin-top: 100px;
                padding: 10px;
            }
            .navbar .hamburger {
                display: flex;
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
            background: var(--mainColor);
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
            <div class="hamburger" id="sidebarHamburger" tabindex="0" aria-label="Toggle sidebar" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Sidebar with Buttons and Links -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <div class="sidebar" id="sidebarMenu">
        <ul>
            <li><b class="depName">Student Dashboard</b></li>
            <hr>
            <li><a href="/student/dashboard" class="nav-link">Application</a></li>
            <li><a href="/page2" class="nav-link">Outstanding Payments</a></li>

            <li><a class="nav-link logout-btn" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Log Out
            </a>
        </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            {{-- <li><a href="/page3" class="nav-link logout-btn">Logout</a></li> --}}
        </ul>
    </div>

    <!-- Vertical Line Between Sidebar and Content -->
    <div class="vertical-line" id="verticalLine"></div>

    <!-- Content Section -->
    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Hamburger toggle for sidebar with overlay
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.getElementById('sidebarHamburger');
        const sidebar = document.getElementById('sidebarMenu');
        const vline = document.getElementById('verticalLine');
        const overlay = document.getElementById('sidebarOverlay');
        function closeSidebar() {
            sidebar.classList.remove('active');
            vline.classList.remove('active');
            overlay.classList.remove('active');
        }
        hamburger.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            vline.classList.toggle('active');
            overlay.classList.toggle('active');
        });
        overlay.addEventListener('click', closeSidebar);
        // Optional: close sidebar on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeSidebar();
        });
    });
    </script>
</body>
</html>
