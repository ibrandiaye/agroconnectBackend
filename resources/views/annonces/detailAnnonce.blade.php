@extends("welcome")

@section("content")
    <div class="main-content">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Table</a></li>
                <li class="active">Smart TV Ultra HD 40 inch - 40JU6600 </li>
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
                        {!! $annonce->description !!}
                    </div>
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
                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" max="100" min="1" step="1">
                            <span class="price"></span>
                        </div>
                        <!-- End quanity -->
                    </div>
                    <!-- End Options -->
                    <div class="products">
                        <div class="product product-details">
                            <a href="#" class="add-to-cart">Add to Cart</a>
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
                    <li class="item" rel="customer">Customer Review</li>
                    <li class="item" rel="product-tags">Product tags</li>
                </ul>
                <div class="tab-container">
                    <div id="description" class="tab-content">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                    </div>
                    <div id="customer" class="tab-content">
                        <div class="col-md-6">
                            <h3 class="space-10">Customer Review</h3>
                            <div class="space-10">
                                <p>Perfect <strong>Review by Tony</strong></p>
                                <div class="icon-rating">
                                    <p>Price:</p>
                                    <input type="radio" id="bird-horizontal-rating-1" name="bird-horizontal-rating" checked="">
                                    <label for="bird-horizontal-rating-1"><i class="fa fa-star"></i></label>
                                    <input type="radio" id="bird-horizontal-rating-2" name="bird-horizontal-rating" checked="">
                                    <label for="bird-horizontal-rating-2"><i class="fa fa-star"></i></label>
                                    <input type="radio" id="bird-horizontal-rating-3" name="bird-horizontal-rating">
                                    <label for="bird-horizontal-rating-3"><i class="fa fa-star"></i></label>
                                    <input type="radio" id="bird-horizontal-rating-4" name="bird-horizontal-rating">
                                    <label for="bird-horizontal-rating-4"><i class="fa fa-star"></i></label>
                                    <input type="radio" id="bird-horizontal-rating-5" name="bird-horizontal-rating">
                                    <label for="bird-horizontal-rating-5"><i class="fa fa-star"></i></label>
                                </div>
                                <p>Like (Posted on 16/07/2015)</p>
                            </div>
                            <div class="space-padding-tb-40">
                                <h4>Customer Review</h4>
                                <p>You're reviewing: Wash Out Parama</p>
                                <p>How do you rate this product?*</p>
                            </div>
                            <div class="space-10">
                                <h4>Customer Review</h4>
                                <form class="radio customer-radio">
                                    <input type="radio" id="star-1" value="1" name="star"/>
                                    <label for="star-1">01 star</label>
                                    <input type="radio" id="star-2" value="2" name="star" />
                                    <label for="star-2">02 star</label>
                                    <input type="radio" id="star-3" value="3" name="star" />
                                    <label for="star-3">03 star</label>
                                    <input type="radio" id="star-4" value="4" name="star" checked/>
                                    <label for="star-4">04 star</label>
                                    <input type="radio" id="star-5" value="5" name="star" />
                                    <label for="star-5">05 star</label>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class=" control-label" for="inputName">Nick Name*</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label class=" control-label" for="inputsumary">Summary of Your Review *</label>
                                    <input type="text" class="form-control" id="inputsumary" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class=" control-label" for="inputReview">Review*</label>
                                    <input type="text" class="form-control" id="inputReview" placeholder="Review*">
                                </div>
                                <button class="btn link-button link-button-v2" type="submit">Submit review</button>
                            </form>
                        </div>
                    </div>
                    <div id="product-tags" class="tab-content">
                        <h3 class="space-20">Product tags</h3>
                        <p>Other  people marked this product with these tags</p>
                        <p>Sumer collection (2) </p>
                        <p>Fashion accessories (2)</p>
                        <a class="btn link-button link-button-v2" href="#" title="add tags">add tags</a>
                    </div>
                </div>
            </div>
            <!-- tab-container -->
            <div class="title-product">
                <h3>upsell products</h3>
            </div>
            <!-- End title -->
            <div class="upsell-product products grid_full">
                <div class="item-inner">
                    <div class="product">
                        <a class="product-images" href="#" title="">
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                            <img class="secondary_image" src="assets/images/products/1.jpg" alt=""/>
                        </a>
                        <p class="product-title">Smart TV Ultra HD 40 inch - 40JU6600</p>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <p class="product-price">$ 650.99</p>
                        <a class="add-to-cart" href="#">Add to Cart</a>
                        <div class="action">
                            <a href="#" title="Like"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View"><i class="fa fa-compress"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item-inner">
                    <div class="product">
                        <a class="product-images" href="#" title="">
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                            <img class="secondary_image" src="assets/images/products/1.jpg" alt=""/>
                        </a>
                        <p class="product-title">Smart TV Ultra HD 40 inch - 40JU6600</p>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <p class="product-price">$ 650.99</p>
                        <a class="add-to-cart" href="#">Add to Cart</a>
                        <div class="action">
                            <a href="#" title="Like"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View"><i class="fa fa-compress"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item-inner">
                    <div class="product sale">
                        <span class="sale lable">Sale</span>
                        <a class="product-images" href="#" title="">
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                            <img class="secondary_image" src="assets/images/products/1.jpg" alt=""/>
                        </a>
                        <p class="product-title">Smart TV Ultra HD 40 inch - 40JU6600</p>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <div class="product-price">
                            <p class="content-star">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <span class="price">$ 650.99</span>
                            <span class="price-old">$ 670.99</span>
                        </div>
                        <a class="add-to-cart" href="#">Add to Cart</a>
                        <div class="action">
                            <a href="#" title="Like"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View"><i class="fa fa-compress"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item-inner">
                    <div class="product ">
                        <span class="new lable">New</span>
                        <a class="product-images" href="#" title="">
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                            <img class="secondary_image" src="assets/images/products/1.jpg" alt=""/>
                        </a>
                        <p class="product-title">Smart TV Ultra HD 40 inch - 40JU6600</p>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <p class="product-price">$ 650.99</p>
                        <a class="add-to-cart" href="#">Add to Cart</a>
                        <div class="action">
                            <a href="#" title="Like"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View"><i class="fa fa-compress"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End container -->
    </div>
@endsection