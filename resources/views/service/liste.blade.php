@extends("welcome")

@section("content")
    <div class="main-content blog-post-container blog-page space-margin-top-0">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blogs</a></li>
                <li class="active">Ullamcorper suscipit lobortis nisl ut aliquip</li>
            </ul>
            <div class="col-md-9 blog-colum-left blog-post-item">
              {{--  <div class="image">
                    <img src="/assets/images/ImgBlog/1.jpg" alt="" />
                </div>
                <h3>Ullamcorper suscipit lobortis nisl ut aliquip.</h3>
                <p class="post-date"><i class="fa fa-calendar"></i>16 December, 2015</p>
                <div class="content">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
                </div>
                <p class="posted space-40">
                    <i class="fa fa-pencil-square-o"></i>
                    Posted in New By <a href="#" title="">Pixel-Creative</a>
                </p>--}}
               {{-- <div class="share-tags">
                    <div class="share">
                        <span>Share to friends</span>
                        <a href="#" title="vi"><i class="fa fa-vine"></i></a>
                        <a href="#" title="vi"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="vi"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="vi"><i class="fa fa-youtube"></i></a>
                    </div>
                    <div class="tags">
                        <span>tags:</span>
                        <a href="#" title="Fashion">Fashion</a>
                        <a class="active" href="#" title="Pixel-Creative">Pixel-Creative</a>
                    </div>
                </div>--}}
                <!-- End Share-tags -->
                @foreach($services as $service)
                <div class="profile space-padding-tb-40 space-30">
                    <div class="avatar">
                        <img src="/assets/images/Futurelife-about1.jpg" alt="Futurelife-about" />
                    </div>
                    <div class="text">
                        <h3>{{$service->titre}}</h3>
                        {!!$service->description!!}
                        <form method="POST" action="{{url('interesse')}}">
                            {{ csrf_field() }}
                        <input type="submit" class="btn link-button pull-right" >intérresé
                        </form>
                    </div>
                </div>
                @endforeach

                <!-- End contact content -->
            </div>
            <div class="widget-area col-xs-12 col-md-3 blog-colum-right">

                    @foreach($categories as $categorie)
                    <aside class="widget">
                        <h3 class="widget-title">{{ $categorie->libelle  }}</h3>
                        <ul>
                            @foreach($categorie->sousCategories as $sousCategorie)
                                <li><a title="Categories" href="{{ route('service.souscategorie',['id'=> $sousCategorie->id]) }}">{{$sousCategorie->libelle}}</a></li>
                            @endforeach
                        </ul>
                    </aside>
                    @endforeach
            </div>
        </div>
        <!-- End container -->
    </div>
@endsection