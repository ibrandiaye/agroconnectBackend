@extends("welcome")

@section("content")
    <div class="main-content blog-post-container blog-page space-margin-top-0">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">METEO</a></li>
            </ul>
            <div class="col-md-9 blog-colum-left blog-post-item">

                <!-- End Share-tags -->
                @foreach($meteos as $meteo)
                    <div class="profile space-padding-tb-40 space-30">
                        <div class="avatar">
                            <img src="/assets/images/meteo.png" alt="Futurelife-about" />
                        </div>
                        <div class="text">
                            <h3>{{Carbon\Carbon::parse( $meteo->updated_at)->format('d-M-Y h:m:s')}}</h3>
                            {!!$meteo->libelle!!}
                            <audio controls>
                                <source src="/audio/{{$meteo->audio}}" type="audio/mpeg">
                                <source src="/audio/{{$meteo->audio}}" type="audio/ogg">
                                Votre navigateur ne supporte pas la balise audio.
                            </audio>

                        </div>
                    </div>
                    @endforeach

                            <!-- End contact content -->
            </div>

        </div>
        <!-- End container -->
    </div>
@endsection