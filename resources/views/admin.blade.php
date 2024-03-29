<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Agroconnect</title>
    <meta content="Agroconnect" name="description" />
    <meta content="Agroconnect" name="author" />
    <link rel="shortcut icon" href="/asset/images/favicon.ico">
    @yield('css')
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/plugins/morris/morris.css">

    <link href="/asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/asset/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="/asset/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/asset/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="/home" class="logo">
                    <span class="logo-light">
                            {{-- <i class="mdi mdi-camera-control"></i> --}}
                             Agroconnect
                        </span>
                    <span class="logo-sm">
                            <i class="mdi mdi-camera-control"></i>
                        </span>
            </a>
        </div>

        <nav class="navbar-custom">
            <ul class="navbar-right list-inline float-right mb-0">
                <!-- full screen -->
                <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                        <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                    </a>
                </li>

                <!-- notification -->
                {{-- <li class="dropdown notification-list list-inline-item">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell-outline noti-icon"></i>
                        <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                        <!-- item-->
                        <h6 class="dropdown-item-text">
                            Notifications
                        </h6>
                        <div class="slimscroll notification-item-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                            </a>

                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li> --}}

                <li class="dropdown notification-list list-inline-item">
                    <div class="dropdown notification-list nav-pro-img">
                        <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="/asset/images/users/user-4.jpg" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                        <a class="dropdown-item" href="{{ route('utilsateur.profil') }}"><i class="mdi mdi-account-circle"></i> Profile</a>
                            {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a> --}}
                            <div class="dropdown-divider"></div>
                            <a onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="mdi mdi-power text-danger"></i>  Se déconnecter</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </div>
                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-effect">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
                <li class="d-none d-md-inline-block">
                    <form role="search" class="app-search">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" placeholder="Search..">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>
            </ul>

        </nav>

    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Menu</li>
                    <li>
                        <a href="/home" class="waves-effect">
                            <i class="icon-accelerator"></i>
                            {{-- <span class="badge badge-success badge-pill float-right">9+</span>  --}}
                            <span> Menu Principal </span>
                        </a>
                    </li>


                    {{-- Seul role Admin --}}
                    @auth
                    @if(Auth::user()->role_id==5)
                    <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-badge-horizontal"></i> <span> Coopérative <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                            <ul class="submenu">
                                <li><a href="{{ route('cooperation.create') }}">Ajouter</a></li>
                                <li><a href="{{route('cooperation.all.admin')}}">Afficher</a></li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Parcelles <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('parcelle.create') }}">Ajouter</a></li>
                                        <li><a href="{{route('parcelle.index')}}">Afficher</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect"><i class="icon-spread"></i> <span> Cultures <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('culture.create') }}">Ajouter</a></li>
                                        <li><a href="{{route('culture.all.admin')}}">Afficher</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Greniers <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('grenier.create') }}">Ajouter</a></li>
                                        <li><a href="{{route('grenier.index')}}">Afficher</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullhorn"></i> <span> Annonce <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                        <ul class="submenu">
                            <li><a href="{{ route('annonce.invalide') }}">à Valider</a></li>
                            <li><a href="{{route('annonce.all.admin')}}">Toutes les annonces</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-folder-text"></i><span> Catégorie <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('categories.create') }}">Ajouter</a></li>
                            <li><a href="{{ route('categories.index') }}">Liste </a></li>
                        </ul>
                    </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-folder-text"></i><span>Sous Catégorie <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('sous-categorie.create') }}">Ajouter</a></li>
                                <li><a href="{{route('sous-categorie.index')}}">Liste </a></li>
                            </ul>
                        </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-dolly-flatbed"></i><span> Produit <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('produit.create') }}">Ajouter Produit</a></li>
                            <li><a href="{{route('produit.index')}}">Liste</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-cloud-showers-heavy"></i><span> Bulletin Meteo <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('publication.create') }}">Ajouter Produit</a></li>
                            <li><a href="{{route('publication.index')}}">Liste</a></li>
                        </ul>
                    </li>
                        <li>
                            <a href="{{ route('conseil.create') }}" class="waves-effect">
                                <i class="icon-accelerator"></i>
                                {{-- <span class="badge badge-success badge-pill float-right">9+</span>  --}}
                                <span> Conseil </span>
                            </a>
                        </li>
                    @endif
                    @endauth
                    {{-- Seul role Admin --}}
                    {{-- @auth
                    @if(Auth::user()->role_id==1)

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Adhesion <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                        <ul class="submenu">
                            <li><a href="{{route('adhesion.index')}}">Adhérer</a></li>
                        </ul>
                    </li>
                    @endif
                    @endauth --}}

                    @auth
                    {{-- Role cooperative --}}
                    @if(Auth::user()->role_id==4)
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Coopérative <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                        <ul class="submenu">
                            <li><a href="{{ route('cooperation.create') }}">Ajouter</a></li>
                            <li><a href="{{route('cooperation.all.admin')}}">Afficher</a></li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Parcelles <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="{{ route('parcelle.create') }}">Ajouter</a></li>
                                    <li><a href="{{route('parcelle.index')}}">Afficher</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Cultures <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="{{ route('culture.create') }}">Ajouter</a></li>
                                    <li><a href="{{route('culture.all.admin')}}">Afficher</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Greniers <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="{{ route('grenier.create') }}">Ajouter</a></li>
                                    <li><a href="{{route('grenier.index')}}">Afficher</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @endauth
                    {{-- Role cooperative --}}
                </ul>

            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
        @yield('content')
    <footer class="footer">
        © 2019 Agroconnect <span class="d-none d-sm-inline-block"> -
            {{-- <i class="mdi mdi-heart text-danger"></i>  --}}
            by Digi221</span>.
    </footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->
</div>
<!-- jQuery  -->
<script src="/asset/js/jquery.min.js"></script>
<script src="/asset/js/bootstrap.bundle.min.js"></script>
<script src="/asset/js/metismenu.min.js"></script>
<script src="/asset/js/jquery.slimscroll.js"></script>
<script src="/asset/js/waves.min.js"></script>



<script src="/asset/pages/dashboard.init.js"></script>
@yield('script')
<!-- App js -->
<script src="/asset/js/app.js"></script>

</body>

</html>