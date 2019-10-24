@extends("welcome")
@section("content")
    <div class="main-content space-80">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Table</li>
            </ul>
            <div class="banner-grid col-md-12">
                <img src="/assets/images/Futurelife-banner-grid.jpg" alt="Banner">
            </div>
            <!-- End Banner Grid -->
            <div class="ordering">
                <a href="#" title="show sidebar">Show Slidebar</a>
                <span class="list"></span>
                <span class="col active"></span>
                <form action="#" method="get" class="order-by">
                    <select class="orderby" name="orderby" id="sousCat">
                        <option>Trier par</option>
                        @foreach($sousCategories as $sousCategorie)
                        <option value="{{$sousCategorie->id}}">{{$sousCategorie->libelle}}</option>
                        @endforeach
                    </select>
                </form>
                <p class="result-count">Showing 1-12 of 30 relults</p>
            </div>
            <!-- End ordering -->
        </div>
        <!-- End container -->
        <div class="products grid_full">
            <div class="container">
                @foreach($annonces as $annonce)
                <div class="item-inner">
                    <div class="product">
                        <a class="product-images" href="#" title="">
                            <img class="primary_image" src="/categorie/{{$annonce->produit->image}}" alt=""/>
                            <img class="secondary_image" src="/categorie/{{$annonce->produit->image}}" alt=""/>
                        </a>
                        <p class="product-title">{{ $annonce->produit->libelle }}</p>
                        <p class="description">{{ $annonce->description }}</p>
                        <p class="product-price">{{ $annonce->prix_unitaire }} CFA</p>
                        <a class="add-to-cart" href="#">Acheter</a>
                        <div class="action">
                            <a href="#" title="Like"><i class="fa fa-heart-o"></i></a>
                            <a href="{{route('une.annonce',[$annonce->id])}}" title="View"><i class="fa fa-compress"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- End container -->
        </div>
        <!-- End product-content products  -->
        <div class="container">
            <div class="pagination-container">
                <nav class="pagination">
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a>
                    <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                </nav>
                <p class="result-count">Showing 1-12 of 30 relults</p>
            </div>
        </div>
    </div>
@endsection
@section("script")
<script>
    $(document).ready( function () {
        $('#sousCat').change(function(){

            window.location.replace('http://127.0.0.1:8000/annonces/categorie/'+$('#sousCat').val());
        })
    } );
</script>
@endsection