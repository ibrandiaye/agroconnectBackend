@extends("welcome")

@section("content")
    <div class="main-content blog-post-container blog-page space-margin-top-0">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Conseil</a></li>
                <li class="active">{{ $conseil->titre }}</li>
            </ul>
            <div class="col-md-9 blog-colum-left blog-post-item">
                <div class="image">
                    <img src="/categorie/{{ $conseil->image }}" alt="" />
                </div>
                <h3>{{ $conseil->titre }}.</h3>
                <p class="post-date"><i class="fa fa-calendar"></i>{{$conseil->updated_at}}</p>
                {!! $conseil->desctiption !!}
                <p class="posted space-40">
                    <i class="fa fa-pencil-square-o"></i>
                    Publié  <a href="#" title="">{{ $conseil->user->name }}</a>
                </p>
              </div>

        </div>
        <!-- End container -->
    </div>
@endsection