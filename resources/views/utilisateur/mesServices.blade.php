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

                <!-- End Share-tags -->
                @foreach($services as $service)
                    <div class="profile space-padding-tb-40 space-30">
                        <div class="avatar">
                            <img src="/assets/images/Futurelife-about1.jpg" alt="Futurelife-about" />
                        </div>
                        <div class="text">
                            <h3>{{$service->titre}}</h3>
                            {!!$service->description!!}
                            <br><br>
                            @foreach($service->interesses as $interesse)
                                <div class="title-product">
                                    <h3>Clients intéressés</h3>
                                </div>
                                <p><strong>Client : {{ $interesse->user->name }}</strong></p>
                                <p><strong>Téléphone: {{ $interesse->user->telephone }}</strong></p>

                                <p>Date: {{ $interesse->created_at }}</p>
                        </div>
                        @endforeach
                        </div>
                    </div>
                    @endforeach

                            <!-- End contact content -->
            </div>
            <div class="widget-area col-xs-12 col-md-3 blog-colum-right">


            </div>
        </div>
        <!-- End container -->
    </div>
@endsection