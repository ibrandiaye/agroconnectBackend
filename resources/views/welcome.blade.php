<!doctype html>
<html lang="{{ app()->getLocale() }}"  xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/vendor/owl-slider.css"/>
    <script type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"></script>
    <title>Agroconnect</title>
</head>
<body>
<div id="topbar">
    <div class="container">
        <div class="topbar-left">
            {{-- <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">USD
                    <i class="fa fa-angle-down"></i></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Dolar(USD)</a></li>
                    <li><a href="#">EURO(EUR)</a></li>
                </ul>
            </div> --}}
            {{-- <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">english
                    <i class="fa fa-angle-down"></i></button>
                <ul class="dropdown-menu">
                    <li><a href="#">vietnames</a></li>
                </ul>
            </div> --}}
        </div>
        <!-- End topBar-left -->
        <div class="voucher">
            <a href="{{route('annonce.create')}}" title="Nouvelle annonce">Ajouter Annonce</a>
            {{--<p>Best discounts and vouchaer codes for online stores</p>--}}
        </div>
        <!-- End voucher -->
        <div class="topbar-right">
            <div class="sign-in">
                {{--  --}}
                @guest
                    <li>
                        <a href="{{ route('login') }}">Se Connecter</a> |

                        <a href="{{ route('register') }}">Créer Compte</a>
                    </li>
                    {{-- <li>
                    </li> --}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('utilsateur.profil') }}">
                                    Mon Profil
                                </a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
                {{--  --}}
                {{-- <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Se déconnecter
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form> --}}
                {{--<a href="#" title="register">Register</a>--}}
                {{--<span>or</span>--}}
                {{--<a href="#" title="sign in">Sign in</a>--}}
            </div>
            <!-- End SignIn -->
        </div>
        <!-- End topbar-right -->
    </div>
    <!-- End container -->
</div>
<!-- End Top Bar -->
<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="col-md-10 col-sm-9 col-xs-12">
                <p class="icon-menu-mobile"><i class="fa fa-bars" ></i></p>
                <div class="logo"><a href="#" title="Futurelife">Agroconnect</a></div>
                <nav class="menu-top">
                    <ul>
                        <li class="level-1"><a href="{{route('liste.annonce')}}" title="Projects">Marché Virtuel</a></li>
                        <li class="level-1"><a href="#" title="Projects">Coopérative</a></li>
                        <li class="level-1"><a href="{{route('service.index')}}" title="collection">Service</a></li>
                        <li class="level-1"><a href="#" title="Blog">Méteo</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-12">
                <div class="cart dropdown">
                    <a class="icon-cart" href="#" title="Cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="cart-count">02</span>
                    </a>
                    <div class="cart-list dropdown-menu">
                        <ul class="list">
                            <li>
                                <a href="#" title="" class="cart-product-image"><img src="assets/images/Futurelife-product-cart1.jpg" alt="Product"></a>
                                <div class="text">
                                    <p class="product-name">Smart TV Ultra HD 40 inch</p>
                                    <p class="product-price">$ 650.99</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" title="" class="cart-product-image"><img src="assets/images/Futurelife-product-cart1.jpg" alt="Product"></a>
                                <div class="text">
                                    <p class="product-name">Smart TV Ultra HD 40 inch</p>
                                    <p class="product-price">$ 650.99</p>
                                </div>
                            </li>
                        </ul>
                        <p class="total"><span>Total:</span> $1121.98</p>
                        <a class="checkout" href="#" title="">Check out</a>
                    </div>
                </div>
                <!-- End cart -->
                <div class="search dropdown">
                    {{-- <i class="fa fa-search dropdown-toggle" data-toggle="dropdown"></i>
                    <div class="search-form dropdown-menu">
                        <form action="#" method="get">
                            <input type="text" autocomplete="off" placeholder="Enter Keywords To Search..." value="" class="ajax_autosuggest_input ac_input" name="s">
                            <button type="submit" class="icon-search">
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </form>
                    </div> --}}
                </div>
                <!-- End search -->
            </div>
        </div>
        <!-- End container -->
    </div>
    <!-- End header-top -->
    <nav class="mega-menu">

    </nav>
    <!-- End mega menu -->
    <nav class="mega-menu-mobile">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <ul class="nav navbar-nav" id="navbar">
                <li class="level1 dropdown">
                    <a href="#" title="Home">Marché Virtuel</a>
                    <div class="sub-menu dropdown-menu">
                        <ul class="menu-level-1">
                            <li class="level2"><a href="">Home 1</a></li>
                            <li class="level2"><a href="home_v2.html">Home 2</a></li>
                            <li class="level2"><a href="home_v3.html">Home 3</a></li>
                            <li class="level2"><a href="home_v3.html">Home 4</a></li>
                            <li class="level2"><a href="home_v3.html">Home 5</a></li>
                        </ul>
                    </div>
                    <!-- End Dropdow Menu -->
                </li>
                <li class="level1"><a href="#">Projects</a></li>
                <li class="level1"><a href="#">collection</a></li>
                <li class="level1"><a href="#">Blog</a></li>
                <li class="level1"><a href="#">about us</a></li>
                <li class="level1 dropdown">
                    <a href="#" title="tables">Tables</a>
                    <div class="sub-menu dropdown-menu">
                        <ul class="menu-level-1">
                            <li class="level2"><a href="#">Clothing</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="Tops">Tops</a></li>
                                    <li class="level3"><a href="#" title="T-shirts">T-shirts</a></li>
                                    <li class="level3"><a href="#" title="shorts">shorts</a></li>
                                    <li class="level3"><a href="#" title="Coats & Jackets">Coats & Jackets</a></li>
                                    <li class="level3"><a href="#" title="Jeans">Jeans</a></li>
                                </ul>
                            </li>
                            <li class="level2"><a href="#">Accessories</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="Tops">Tops</a></li>
                                    <li class="level3"><a href="#" title="T-shirts">T-shirts</a></li>
                                    <li class="level3"><a href="#" title="shorts">shorts</a></li>
                                    <li class="level3"><a href="#" title="Coats & Jackets">Coats & Jackets</a></li>
                                    <li class="level3"><a href="#" title="Jeans">Jeans</a></li>
                                </ul>
                            </li>
                            <li class="level2"><a href="#">Brand</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="Tops">Tops</a></li>
                                    <li class="level3"><a href="#" title="T-shirts">T-shirts</a></li>
                                    <li class="level3"><a href="#" title="shorts">shorts</a></li>
                                    <li class="level3"><a href="#" title="Coats & Jackets">Coats & Jackets</a></li>
                                    <li class="level3"><a href="#" title="Jeans">Jeans</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End Dropdow Menu -->
                </li>
                <li class="level1 dropdown"><a href="#" title="Chairs">Chairs</a>
                </li>
                <li class="level1"><a href="#">Light</a></li>
                <li class="level1"><a href="#" title="sofas">Sofas</a></li>
                <li class="level1"><a href="#" title="Accessories">Accessories</a></li>
            </ul>
        </div>
    </nav>
</header>
@yield('content')
<footer id="footer">
    <div class="container">
        <div class="row footer-top">
            <div class="col-md-6">
                <h3>Notre entreprise</h3>
                <p>Digi221 </p>
                <div class="infomation">
                    <p><i class="fa fa-phone"></i>Telephone: +221 77 487 46 28</p>
                    <p><i class="fa fa-envelope-o"></i>Email: groupedigi221@gmail.com</p>
                    <p><i class="fa fa-clock-o"></i>8:00 - 19:00, Lundi - Samedi</p>
                </div>

            </div>

            <div class="col-md-4">
                {{-- <h3>Customer service</h3>
                <ul class="menu">
                    <li><a href="#" title="Help">Help</a></li>
                    <li><a href="#" title="Contact Us">Contact Us</a></li>
                    <li><a href="#" title="Warranty">Warranty</a></li>
                    <li><a href="#" title="Terms & Conditions">Terms & Conditions</a></li>
                    <li><a href="#" title="Shopping information">Shopping information</a></li>
                </ul> --}}
                {{-- <ul class="menu">
                    <li><a href="#" title="My Account">My Account</a></li>
                    <li><a href="#" title="Arder Status">Arder Status</a></li>
                    <li><a href="#" title="Payment">Payment</a></li>
                    <li><a href="#" title="Gift Voucher">Gift Voucher</a></li>
                    <li><a href="#" title="Cancellations">Cancellations</a></li>
                </ul> --}}
            </div>
            <div class="col-md-2">
                {{-- <h3>A Propos</h3>
                <ul class="menu">
                    <li><a href="#" title="Projects">Projects</a></li>
                    <li><a href="#" title="Jobs">Jobs</a></li>
                    <li><a href="#" title="Collections">Collections</a></li>
                    <li><a href="#" title="Blog">Blog</a></li>
                    <li><a href="#" title="Media">Media</a></li>
                </ul> --}}
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-6 social">
                <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                {{-- <a href="#" title="sky"><i class="fa fa-skype"></i></a> --}}
                {{-- <a href="#" title="vibo"><i class="fa fa-vine"></i></a> --}}
                <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="col-md-6">
                <p>Copyright &copy; 2019 by <a href="#" title="Digi221">Digi221</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- End container -->
</footer>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/js/instafeed.min.js"></script>
<script type="text/javascript" src="/assets/js/store.js"></script>
@yield("script")
</body>
</html>




