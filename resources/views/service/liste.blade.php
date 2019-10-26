@extends("welcome")

@section("content")
    <div class="main-content blog-post-container blog-page space-margin-top-0">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Services</a></li>
            </ul>
            <div class="col-md-9 blog-colum-left blog-post-item">

                @foreach($services as $service)
                <div class="profile space-padding-tb-40 space-30">
                    <div class="avatar">
                        <img src="/assets/images/services.jpg" alt="Futurelife-about" />
                    </div>
                    <div class="text">
                        <h3>{{$service->titre}}</h3>
                        {!!$service->description!!}
                        <form method="POST" action="{{url('interesse')}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <input type="submit" class="btn link-button pull-right" value="intérresé" >
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