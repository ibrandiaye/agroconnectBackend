@extends('welcome')

@section('content')
    <div class="slidershow-container">
        <div class="container">
            <div class="slidershow-content">
                <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="active item">
                            <a href="#" title="banner1"><img class="lazy-image" data-original="" alt="banner1" src="assets/images/Futurelife-slideshow1.jpg" /></a>
                        </div>
                        <div class="item">
                            <a href="#" title="banner2"><img class="lazy-image" data-original="" alt="banner2" src="assets/images/Futurelife-slideshow1.jpg" /></a>
                        </div>
                        <div class="item">
                            <a href="#" title="banner2"><img class="lazy-image" data-original="" alt="banner2" src="assets/images/Futurelife-slideshow1.jpg" /></a>
                        </div>
                    </div>
                    <a class="carousel-control right" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a class="carousel-control left" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                </div>
            </div>
            <!-- End slidershow-content -->
        </div>
    </div>
    <!-- End slideshow-container -->
    <div class="main-content">
        <div class="container">
            <div class="title-text">
                <h3>Nouvelles annonces</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <!-- End title text -->
            <div class="slider-product our-new-product">
                <div class="tab-container space-30">
                    <div id="" class="tab-content">
                        <div class="product-tab-content products">
                            @foreach($annonces as $annonce)
                            <div class="item-inner">
                                <div class="product">
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="/categorie/{{$annonce->produit->image}}" alt=""/>
                                        <img class="secondary_image" src="/categorie/{{$annonce->produit->image}}" alt=""/>
                                    </a>
                                    <p class="product-title">{{$annonce->produit->libelle}}</p>
                                    <p class="product-price">{{ $annonce->prix_unitaire }} CFA</p>
                                    <a class="add-to-cart" href="{{route('une.annonce',[$annonce->id])}}" >Voir</a>
                                    <div class="action">
                                        <a href="#" title="Like"><i class="fa fa-heart-o"></i></a>
                                        <a href="{{route('une.annonce',[$annonce->id])}}" title="Voir"><i class="fa fa-compress"></i></a>
                                    </div>
                                </div>
                            </div>
                                <div class="modal fade" id="myModal{{ $annonce->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Modal Header</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the modal.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                           @endforeach
                        </div>
                        <!-- End product-tab-content products                                     -->
                    </div>
                </div>
            </div>
            <!-- End OurNewProduct -->
            <div class="banner-center">
                <div class="col-md-3 first">
                    <div class="banner-item">
                        <div class="text">
                            <h2>Chairs</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                        <div class="images">
                            <img src="assets/images/Futurelife-banner-center1.png" alt="Banner-Center">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-item">
                        <div class="text">
                            <h3>Design Creative</h3>
                            <h2>lantern</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <a href="#" title="shopnow">Shop now</a>
                        </div>
                        <div class="images">
                            <img src="assets/images/Futurelife-banner-center2.png" alt="Banner-Center"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 last">
                    <div class="banner-item">
                        <div class="text">
                            <h3>ceramic <strong>LIGHT</strong></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <a href="#" title="shopnow">Shop Now</a>
                        </div>
                        <div class="images">
                            <img src="assets/images/Futurelife-banner-center3.png" alt="Banner-center">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Center -->
            <div class="title-text">
                <h3>from our blog</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <!-- End title text -->
            <div class="blog-post-container space-100">
                <div class="blog-post-inner">
                    <div class="blog-post-item">
                        <p class="blog-post-image">
                            <a href="#" title="Post"><img src="assets/images/ImgBlog/1.jpg" alt=""></a>
                        </p>
                        <p class="post-date"><i class="fa fa-calendar"></i>16 December, 2015</p>
                        <h3>Integer scelerisque diam vitae aliquam fringilla.</h3>
                        <p class="post-tags">
                            <a href="#" title="like" class="like"><i class="fa fa-heart-o"></i>100 like</a>
                            <a href="#" title="comments" class="comments"><i class="fa fa-comment-o"></i>25 Comments</a>
                        </p>
                        <p class="read-more">
                            <a href="#" title="Read more">Read More</a>
                        </p>
                    </div>
                    <!-- End blog-item -->
                    <div class="blog-post-item">
                        <p class="blog-post-image">
                            <a href="#" title="Post"><img src="assets/images/ImgBlog/1.jpg" alt=""></a>
                        </p>
                        <p class="post-date"><i class="fa fa-calendar"></i>16 December, 2015</p>
                        <h3>Integer scelerisque diam vitae aliquam fringilla.</h3>
                        <p class="post-tags">
                            <a href="#" title="like" class="like"><i class="fa fa-heart-o"></i>100 like</a>
                            <a href="#" title="comments" class="comments"><i class="fa fa-comment-o"></i>25 Comments</a>
                        </p>
                        <p class="read-more">
                            <a href="#" title="Read more">Read More</a>
                        </p>
                    </div>
                    <!-- End blog-item -->
                    <div class="blog-post-item">
                        <p class="blog-post-image">
                            <a href="#" title="Post"><img src="assets/images/ImgBlog/1.jpg" alt=""></a>
                        </p>
                        <p class="post-date"><i class="fa fa-calendar"></i>16 December, 2015</p>
                        <h3>Integer scelerisque diam vitae aliquam fringilla.</h3>
                        <p class="post-tags">
                            <a href="#" title="like" class="like"><i class="fa fa-heart-o"></i>100 like</a>
                            <a href="#" title="comments" class="comments"><i class="fa fa-comment-o"></i>25 Comments</a>
                        </p>
                        <p class="read-more">
                            <a href="#" title="Read more">Read More</a>
                        </p>
                    </div>
                    <!-- End blog-item -->
                </div>
                <!-- End Blog-Post-Inner -->
            </div>
            <!-- End blog post -->

        </div>
        <!-- End container -->
        <div class="newsletter">
            <div class="text">
                <h3>Newsletter</h3>
                <p>Subscribe to the Futurelife mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                <form action="#" method="get" accept-charset="utf-8">
                    <input type="text" onblur="if (this.value == '') {this.value = 'Enter Your Email';}" onfocus="if(this.value != '') {this.value = '';}" value="Enter Your Email" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter" name="email">
                    <button class="button" title="Subscribe" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <!-- End NewsLetter -->
        <div class="shipping-container">
            <div class="container">
                <div class="col-md-4">
                    <div class="shipping-item">
                        <p class="images"></p>
                        <div class="text">
                            <h3>24/7 CUSTOMER SERVICE</h3>
                            <p>Service Support 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shipping-item">
                        <p class="images"></p>
                        <div class="text">
                            <h3>MONEY BACK GUARANTEE !</h3>
                            <p>100% Money Back - 30 Days</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shipping-item">
                        <p class="images"></p>
                        <div class="text">
                            <h3>FREE SHIPPING WORLDWIDE</h3>
                            <p>Free shipping worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Shipping-Container -->
        <div id="instagram" class="show">
            <div class="item-instagram">
                <img alt="" src="assets/images/Futurelife-banner-bottom1.jpg">
                <div class="action">
                    <h3>instagram</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                    <a href="https://www.instagram.com/p/BF4ZSYDynU8/">View more</a>
                </div>
            </div>
            <div class="item-instagram">
                <img alt="" src="assets/images/Futurelife-banner-bottom1.jpg">
                <div class="action">
                    <h3>instagram</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                    <a href="https://www.instagram.com/p/BF4ZSYDynU8/">View more</a>
                </div>
            </div>
            <div class="item-instagram">
                <img alt="" src="assets/images/Futurelife-banner-bottom1.jpg">
                <div class="action">
                    <h3>instagram</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                    <a href="https://www.instagram.com/p/BF4ZSYDynU8/">View more</a>
                </div>
            </div>

            <div class="item-instagram">
                <img alt="" src="assets/images/Futurelife-banner-bottom1.jpg">
                <div class="action">
                    <h3>instagram</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                    <a href="https://www.instagram.com/p/BF4ZSYDynU8/">View more</a>
                </div>
            </div>

            <div class="item-instagram">
                <img alt="" src="assets/images/Futurelife-banner-bottom1.jpg">
                <div class="action">
                    <h3>instagram</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                    <a href="https://www.instagram.com/p/BF4ZSYDynU8/">View more</a>
                </div>
            </div>
        </div>
        <!-- End banner-bottom -->
        <!-- End banner-bottom -->
    </div>
    <!-- End MainContent -->
@endsection