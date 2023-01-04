{{-- <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">

        <img src="assets/images/nicsdiner.png" width="160px" height="80px" alt="logo" class="mt-10 ml-8">

        <ul class="nav">
            <li class="nav-item nav-category">
                <span class="nav-link">Admin Control</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/users') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">User's</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/foodmenu') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Add Menu</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/viewgallery') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-table-large"></i>
                    </span>
                    <span class="menu-title">Gallery</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/orders') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-chart-bar"></i>
                    </span>
                    <span class="menu-title">Order List</span>
                </a>
            </li>


            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/testimonies') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-chart-bar"></i>
                    </span>
                    <span class="menu-title">Testimonies</span>
                </a>
            </li>
        </ul>
    </nav>
</div> --}}


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #ff8d02;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #ffc47c;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>

<body>
    <nav class="nav">
        <div class="sidebar">
            <li class="{{ request()->routeIs('/users') ? 'active' : '' }}"><a href="/users">Users</a></li>
            <li class="{{ request()->routeIs('/foodmenu') ? 'active' : '' }}"><a href="/foodmenu">Add Menu</a></li>
            <li class="{{ request()->routeIs('/viewgallery') ? 'active' : '' }}"><a href="/viewgallery">Gallery</a></li>
            <li class="{{ request()->routeIs('/orders') ? 'active' : '' }}"><a href="/orders">Order's</a></li>
            <li class="{{ request()->routeIs('/testimonies') ? 'active' : '' }}"><a href="/testimonies">Testimonies</a></li>
            {{-- <a href="{{ url('/users') }}">Users</a>
            <a href="{{ url('/foodmenu') }}">Add Menu</a>
            <a href="{{ url('/viewgallery') }}">Gallery</a>
            <a href="{{ url('orders') }}">Order's</a>
            <a href="{{ url('testimonies') }}">Testimonies</a> --}}
        </div>
    </nav>
    <div class="content">
    </div>

</body>

</html>
