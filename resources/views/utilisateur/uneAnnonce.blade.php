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
                        <h1>{{ $annonce->libelle }}</h1>

                    </div>
                    {!! $annonce->description !!}
                    <!-- End product-name -->
                    <div class="rating">
                        <div class="overflow-h">
                            <div class="icon-rating">
                                <input type="radio" id="star-horizontal-rating-1" name="star-horizontal-rating" checked="">
                                <label for="star-horizontal-rating-1"><i class="fa fa-star"></i></label>
                                <input type="radio" id="star-horizontal-rating-2" name="star-horizontal-rating" checked="">
                                <label for="star-horizontal-rating-2"><i class="fa fa-star"></i></label>
                                <input type="radio" id="star-horizontal-rating-3" name="star-horizontal-rating" checked="">
                                <label for="star-horizontal-rating-3"><i class="fa fa-star"></i></label>
                                <input type="radio" id="star-horizontal-rating-4" name="star-horizontal-rating">
                                <label for="star-horizontal-rating-4"><i class="fa fa-star"></i></label>
                                <input type="radio" id="star-horizontal-rating-5" name="star-horizontal-rating">
                                <label for="star-horizontal-rating-5"><i class="fa fa-star"></i></label>
                            </div>
                            <ul>
                                <li>3 Rating(s)</li>
                                <li><a href="#" title="add your rating">Add Your Rating</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Rating -->
                    <div class="wrap-price space-30 space-padding-tb-30">
                        <p class="price">{{$annonce->prix_unitaire}} cfa</p>
                        <p class="price">{{$annonce->quantite}} {{ $annonce->unite }}</p>
                    </div>
                    <!-- End Price -->
                    <div class="options">
                        <div class="title-product">
                            <h3>Options</h3>
                        </div>
                        <form class="form-horizontal">
                            <div class="form-group col-md-12">
                                <label class=" control-label" for="inputName">Size*</label>
                                <select class="form-control">
                                    <option value="">- Please select -</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                    <option value="SMALL">SMALL</option>
                                    <option value="MEDIUM">MEDIUM</option>
                                </select>
                            </div><div class="form-group">
                                <label class=" control-label" for="inputName">Color*</label>
                                <select class="form-control">
                                    <option value="">- Please select -</option>
                                    <option value="BLUE">Blue</option>
                                    <option value="Red">Red</option>
                                    <option value="Yellow">Yellow</option>
                                </select>
                            </div>
                        </form>
                        <div class="quantity space-30">
                            <p class="color-red">Repuired Fiields *</p>
                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" max="{{$annonce->quantite}}" min="1" step="1">
                            <span class="price"></span>
                        </div>
                        <!-- End quanity -->
                    </div>
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
            <div class="hoz-tab-container space-padding-tb-40">
                <ul class="tabs">
                    <li class="item" rel="description">Description</li>
                    <li class="item" rel="customer">Clients Inéressé </li>
                </ul>
                <div class="tab-container">
                    <div id="description" class="tab-content">
                        {!! $annonce->produit->description !!}
                    </div>
                    <div id="customer" class="tab-content">
                        <div class="col-md-6">
                            <h3 class="space-10">Client Inéressé</h3>
                            <div class="space-10">
                                @foreach($annonce->posters as $poster)
                                <p>Client, <strong>{{ $poster->user->name }}</strong></p>
                                <p><strong>{{ $poster->user->telephone }}</strong></p>

                                <p>Date: {{ $poster->created_at }}</p>
                            </div>
                            @endforeach

                        </div>
                     </div>

                </div>
            </div>
            <!-- tab-container -->



        </div>

        <!-- End container -->
    </div>
@endsection