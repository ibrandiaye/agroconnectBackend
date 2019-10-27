@extends("welcome")

@section("content")
    <div class="main-content page-blog space-80">
        <div class="container">

            <div class="blog-post-container blog-page blog-post-columns-3">

                <div class="row margin-0">
                    <div class="hidden"> {{ $ct = 0 }}</div>
                    @foreach($conseils as $conseil)
                        <div class="hidden">   {{ $ct++ }}</div>
                    <div class="blog-post-item">
                        <div class="blog-post-image effect-v6">
                            <a href="{{ route('conseil.une',[$conseil->id]) }}" title="Post"><img src="/categorie/{{ $conseil->image }}" alt=""></a>
                            <a class="action light-style"  href="{{ route('conseil.une',[$conseil->id]) }}"><i class="icons icons-bodered radius-x fa fa fa-link"></i>
                            </a>
                        </div>
                        <p class="post-by"><span>Posté Par</span><span> {{ $conseil->user->name }}</span></p>
                        <h3><a href="{{ route('conseil.une',[$conseil->id]) }}" title="{{$conseil->titre}}" >{{$conseil->titre}}</a></h3>
                        <p class="post-date"><i class="fa fa-calendar"></i>{{ $conseil->created_at }}</p>
                        {!!str_limit($conseil->desctiption, $limit = 150, $end = '...')!!}
                    </div>
                    @if($ct==0)
                        </div>
                <div class="row margin-0">
                     @endif
                        @endforeach
                    <!-- End blog-item -->
                </div>

               {{-- <div class="pagination-container blog">
                    <nav class="pagination">
                        <span class="page-numbers current">01</span>
                        <a class="page-numbers" href="#">02</a>
                        <a class="page-numbers" href="#">03</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </nav>
                </div>--}}
                <!-- End pagination-container -->
            </div>

            <!-- End blog-post-container -->
        </div>
        <!-- End container -->
    </div>
@endsection