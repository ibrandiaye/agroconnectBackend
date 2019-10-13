<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>Blank Page - AppStack - Admin &amp; Dashboard Template</title>

    <link rel="preconnect" href="//fonts.gstatic.com/" crossorigin="">
    <link href="/css/classic.css" rel="stylesheet">

    <!-- PICK ONE OF THE STYLES BELOW -->
    <!-- <link href="css/classic.css" rel="stylesheet"> -->
    <!-- <link href="css/corporate.css" rel="stylesheet"> -->
    <!-- <link href="css/modern.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- You can remove this after picking a style -->
    <style>
        body {
            opacity: 0;
        }
    </style>
    <script src="/js/settings.js"></script>
    <!-- END SETTINGS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-120946860-6');
    </script></head>

<body>
<div class="wrapper">
    <nav id="sidebar" class="sidebar">
        <div class="sidebar-content ">
            <a class="sidebar-brand" href="index.html">
                <i class="align-middle" data-feather="box"></i>
                <span class="align-middle">AppStack</span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Main
                </li>

                <li class="sidebar-item">
                    <a href="#dashboards" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                    <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="dashboard-default.html">Default</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="dashboard-analytics-1.html">Analytics</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="dashboard-e-commerce.html">E-commerce</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="dashboard-social.html">Social</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="dashboard-crypto.html">Crypto <span class="sidebar-badge badge badge-primary">New</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Pages</span>
                    </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-profile.html">Profile</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Settings</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-clients.html">Clients</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-projects.html">Projects <span class="sidebar-badge badge badge-primary">New</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-invoice.html">Invoice</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-pricing.html">Pricing</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-tasks.html">Tasks <span class="sidebar-badge badge badge-primary">New</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-blank.html">Blank Page</a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
                        <span class="sidebar-badge badge badge-secondary">12/24</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset Password</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404 Page</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500 Page</a></li>
                    </ul>
                </li>
            </ul>



        </div>
    </nav>

    <div class="main">
        <nav class="navbar navbar-expand navbar-light bg-white">
            <a class="sidebar-toggle d-flex mr-2">
                <i class="hamburger align-self-center"></i>
            </a>

            <form class="form-inline d-none d-sm-inline-block">
                <input class="form-control form-control-no-border mr-sm-2" type="text" placeholder="Search projects..." aria-label="Search">
            </form>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
                            <div class="dropdown-menu-header">
                                <div class="position-relative">
                                    4 New Messages
                                </div>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <img src="img\avatars\avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Ashley Briggs">
                                        </div>
                                        <div class="col-10 pl-2">
                                            <div class="text-dark">Ashley Briggs</div>
                                            <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                            <div class="text-muted small mt-1">15m ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <img src="img\avatars\avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="Carl Jenkins">
                                        </div>
                                        <div class="col-10 pl-2">
                                            <div class="text-dark">Carl Jenkins</div>
                                            <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                            <div class="text-muted small mt-1">2h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <img src="img\avatars\avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Stacie Hall">
                                        </div>
                                        <div class="col-10 pl-2">
                                            <div class="text-dark">Stacie Hall</div>
                                            <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                            <div class="text-muted small mt-1">4h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <img src="img\avatars\avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Bertha Martin">
                                        </div>
                                        <div class="col-10 pl-2">
                                            <div class="text-dark">Bertha Martin</div>
                                            <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                            <div class="text-muted small mt-1">5h ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all messages</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                       {{-- <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                            <div class="position-relative">
                                <i class="align-middle" data-feather="bell-off"></i>
                            </div>
                        </a>--}}
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                            <div class="dropdown-menu-header">
                                4 New Notifications
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <i class="text-danger" data-feather="alert-circle"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Update completed</div>
                                            <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                            <div class="text-muted small mt-1">2h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <i class="text-warning" data-feather="bell"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Lorem ipsum</div>
                                            <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                            <div class="text-muted small mt-1">6h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <i class="text-primary" data-feather="home"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Login from 192.186.1.1</div>
                                            <div class="text-muted small mt-1">8h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <i class="text-success" data-feather="user-plus"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">New connection</div>
                                            <div class="text-muted small mt-1">Anna accepted your request.</div>
                                            <div class="text-muted small mt-1">12h ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all notifications</a>
                            </div>
                        </div>
                    </li>
                  {{--  <li class="nav-item dropdown">
                        <a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-toggle="dropdown">
                            <img src="img\flags\us.png" alt="English">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                            <a class="dropdown-item" href="#">
                                <img src="img\flags\us.png" alt="English" width="20" class="align-middle mr-1">
                                <span class="align-middle">English</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="img\flags\es.png" alt="Spanish" width="20" class="align-middle mr-1">
                                <span class="align-middle">Spanish</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="img\flags\de.png" alt="German" width="20" class="align-middle mr-1">
                                <span class="align-middle">German</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="img\flags\nl.png" alt="Dutch" width="20" class="align-middle mr-1">
                                <span class="align-middle">Dutch</span>
                            </a>
                        </div>
                    </li>--}}
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                            <i class="align-middle" data-feather="settings"></i>
                        </a>

                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                            <img src="/img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle mr-1" alt="Chris Wood"> <span class="text-dark">Chris Wood</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages-settings.html">Settings & Privacy</a>
                            <a class="dropdown-item" href="#">Help</a>
                            <a class="dropdown-item" href="#">Sign out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="content">
            <div class="container-fluid p-0">
                @yield('content')
                {{--<h1 class="h3 mb-3">Blank Page</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Empty card</h5>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>--}}

            </div>
        </main>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-left">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Help Center</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Terms of Service</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 text-right">
                        <p class="mb-0">
                            &copy; 2019 - <a href="index.html" class="text-muted">AppStack</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="/js/app.js"></script>

</body>

</html>
{{--
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guyane</title>

    <!-- Custom fonts for this template-->

    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="/vendor/jquery/jquery.min.js"></script>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SDIS<sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Utilisateur
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClient" aria-expanded="true" aria-controls="collapseClient">
                <i class="fas fa-fw fa-cog"></i>
                <span>Utilisateur</span>
            </a>
            <div id="collapseClient" class="collapse" aria-labelledby="headingClient" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"> Utilisateur:</h6>
                    <a class="collapse-item" href="">Enregistrer Chauffeur</a>
                    <a class="collapse-item" href="">Liste Clients</a>
                    <a class="collapse-item" href="">Liste Chauffeur</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Categorie</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Categorie:</h6>
                    <a class="collapse-item" href="{{route('categories.create')}}">Ajouer Categorie</a>
                    <a class="collapse-item" href="{{route('sous-categorie.create')}}">Ajouter sous categorie</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTypevehicule" aria-expanded="true" aria-controls="collapseTypevehicule">
                <i class="fas fa-fw fa-cog"></i>
                <span>Produit</span>
            </a>
            <div id="collapseTypevehicule" class="collapse" aria-labelledby="headingTypevehicule" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Produit:</h6>
                    <a class="collapse-item" href="{{route('produit.create')}}">Enregistrer</a>
                    <a class="collapse-item" href="">Liste</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsevehicule" aria-expanded="true" aria-controls="collapsevehicule">
                <i class="fas fa-fw fa-cog"></i>
                <span> Vehicule</span>
            </a>
            <div id="collapsevehicule" class="collapse" aria-labelledby="headingvehicule" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Vehicule:</h6>
                    <a class="collapse-item" href="">Enregistrer</a>
                    <a class="collapse-item" href="">Liste</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseproposition" aria-expanded="true" aria-controls="collapseproposition">
                <i class="fas fa-fw fa-cog"></i>
                <span> Proposition</span>
            </a>
            <div id="collapseproposition" class="collapse" aria-labelledby="headingproposition" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Proposition:</h6>
                    <a class="collapse-item" href="">Enregistrer</a>
                    <a class="collapse-item" href="">Liste</a>
                    <a class="collapse-item" href="">demande</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTypeproposition" aria-expanded="true" aria-controls="collapseTypeproposition">
                <i class="fas fa-fw fa-cog"></i>
                <span>Type Proposition</span>
            </a>
            <div id="collapseTypeproposition" class="collapse" aria-labelledby="headingTypeproposition" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Type Proposition:</h6>
                    <a class="collapse-item" href="">Enregistrer</a>
                    <a class="collapse-item" href="">Liste</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Tarifs</span>
            </a>
            <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    --}}
{{-- <h6 class="collapse-header">Gestion Tarif:</h6>
                     <a class="collapse-item" href="{{ route('tarif.create') }}">Ajouter Tarif poid</a>
                     <a class="collapse-item" href="{{ route('tarif.index') }}">Liste Tarifs poid</a>
                     <a class="collapse-item" href="{{ route('valeur.create') }}">Ajouter Tarif valeur</a>
                     <a class="collapse-item" href="{{ route('valeur.index') }}">Liste Tarifs valeur</a>
                     <a class="collapse-item" href="{{ route('distance.create') }}">Ajouter Tarif distance</a>
                     <a class="collapse-item" href="{{ route('distance.index') }}">Liste Tarifs distance</a>--}}{{--

                </div>
            </div>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                --}}
{{--!! Form::open(['url' => 'rechercherColis','enctype'=>'multipart/form-data','class'=>'d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search'])
                <div class="input-group">
                    --}}
{{--<input type="text" class="form-control bg-light border-0 small" placeholder="Taper le code..." aria-label="Search" aria-describedby="basic-addon2" name="code">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
                --}}
{{--!!   Form::close() !!--}}{{--


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ibra Ndiaye</span>
                            <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">-->
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; DIGI221 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="#"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="#" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->

<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="/js/demo/datatables-demo.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable(
                {
                    "language": {
                        "url": "/vendor/datatables/french.lang"
                    }
                }
        );
    } );
</script>

</body>

</html>
--}}
