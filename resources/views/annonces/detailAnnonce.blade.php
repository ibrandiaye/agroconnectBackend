@extends("welcome")

@section("content")
    <div class="main-content">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">{{$annonce->produit->sousCategorie->libelle}}</a></li>
                <li class="active">{{$annonce->produit->libelle}} </li>
            </ul>
            <div class="product-details-content">
                <div class="col-md-6 col-sm-6">
                    <div class="product-img-box">
                        <a id="image-view" title="Product Image">
                            <img id="image" src="/categorie/{{$annonce->produit->image}}" alt="Product"/>
                        </a>
                        <div class="product-thumb">
                            <ul class="thumb-content">
                                <li class="thumb active"><a href="/categorie/{{$annonce->produit->image}}" title="thumb product view1" onclick="swap(this);return false;"><img src="/categorie/{{$annonce->produit->image}}" alt="thumb product1"/></a></li>
                                <li class="thumb active"><a href="/categorie/{{$annonce->produit->image}}" title="thumb product view1" onclick="swap(this);return false;"><img src="/categorie/{{$annonce->produit->image}}" alt="thumb product1"/></a></li>
                                <li class="thumb active"><a href="/categorie/{{$annonce->produit->image}}" title="thumb product view1" onclick="swap(this);return false;"><img src="/categorie/{{$annonce->produit->image}}" alt="thumb product1"/></a></li>
                                <li class="thumb active"><a href="/categorie/{{$annonce->produit->image}}" title="thumb product view1" onclick="swap(this);return false;"><img src="/categorie/{{$annonce->produit->image}}" alt="thumb product1"/></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End product-img-box -->
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="product-name space-30">
                        <br><br>
                        <li class="item" rel="description">Description Annonce</li>
                        <h1>
                        {!! $annonce->libelle !!}
                       </h1>
                    </div>
                    <div class="product-name space-30">
                        <ul class="tabs">
                            <li class="item" rel="description">Description</li>
                            {!! $annonce->produit->description !!}
                        </ul>
                    </div>
                    <!-- End product-name -->

                    <!-- End Rating -->
                    <div class="wrap-price space-30 space-padding-tb-30">
                        <p class="price">{{$annonce->prix_unitaire}} cfa/ {{ $annonce->unite }}</p>
                        <p class="price">{{$annonce->quantite}} {{ $annonce->unite }}</p>
                    </div>
                    <!-- End Price -->
                    <!-- End Options -->
                    <div class="products">
                        <div class="product product-details">
                            <button href="#" class="add-to-cart" data-toggle="modal" data-target="#myModal">Acheter</button>
                            <div class="action">
                                <a title="Like" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="View" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End product-details-content -->

            <!-- tab-container -->

         {{--</div>        </div><button type="button" class="btn btn-info btn-lg" >Open Modal</button>--}}

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('poster') }}">
                            {{ csrf_field() }}
                            <div class="quantity 0">
                                <p >Quantite *</p>
                                <input type="number" size="4" class="form-control"  value="1" name="quantite" max="{{$annonce->quantite}}" min="1" step="1" >
                                <span class="price"></span>

                                <input type="hidden" value="{{ $annonce->id }}" name="annonce_id">
                                <br>
                                <input type="submit" class="btn btn-primary" value="valider">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">fermer</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- End container -->
    </div>
    </div>
@endsection