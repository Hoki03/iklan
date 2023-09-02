<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
    <link href="{{asset('bootstrap\css\bootstrap.css')}}" rel="stylesheet">
    <script src="{{asset('bootstrap\js\bootstrap.js')}}"></script>

    <link rel="stylesheet" href="{{asset('plt/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('plt/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <script src="{{asset('plt/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('plt/assets/js/config.js')}}"></script>
    <link rel="stylesheet" href="{{asset('plt/assets/vendor/fonts/boxicons.css')}}" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard">
                    <img src="{{asset('Image\Logo.svg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Dashboard
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-secondary"><i class="fas fa-plus"></i></button>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn-outline-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('Image/Vector.svg')}}">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="edit_user/1">Profile</a></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
                <a href="index.html" class="menu-link">
                    <img class="menu-icon" src="{{asset('image/resep.svg')}}">
                    <div data-i18n="Analytics">Resep</div>
                </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
                <a href="index.html" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Riwayat</div>
                </a>
            </li>


        </ul>
    </aside>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('plt/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('plt/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('plt/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('plt/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('plt/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('plt/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('plt/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('plt/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>