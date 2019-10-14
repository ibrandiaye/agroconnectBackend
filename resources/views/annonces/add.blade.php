@extends("welcome")

@section("content")
    <div class="main-content my-account">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Ajouter Annonce</li>
            </ul>
            <div id="secondary" class="widget-area col-xs-12 col-md-3">
                <aside class="widget widget_product_categories">
                    <h3 class="widget-title">Welcome back!</h3>
                </aside>
            </div>
            <!-- End Secondary -->
            <div id="primary" class="col-xs-12 col-md-9">
                <div class="title-product">
                    <h3>Personal information</h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                            <!-- End title  -->
                    <div class="contact-form">
                        <form class="form-horizontal" method="POST" action="{{ url('annonce') }}">
                            {{ csrf_field() }}
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputCountry" class=" control-label">Produit</label>
                                <select id="inputRole" class="form-control" name="produit_id">
                                    <option value="">Vous êtes...</option>
                                    @foreach($produits as $produit)
                                        <option value="{{ $produit->id }}">{{ $produit->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>

                                <div class="form-group">
                                    <label class=" control-label" for="inputfname">Libelle</label>
                                    <textarea class="form-control" name="libelle"></textarea>
                                    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                                    <script>
                                        CKEDITOR.replace( 'libelle' );
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label class=" control-label" for="inputPrixUnitaire">Prix Unitaire</label>
                                    <input type="number" name="prix_unitaire" class="form-control" id="PrixUnitaire" placeholder="Entrer le prix Unitaire" required="">
                                </div>
                                <div class="form-group">
                                    <label class=" control-label" for="inputquantite">Quantite</label>
                                    <input type="number" name="quantite" class="form-control" id="inputquantite" placeholder="Entrer votre Adresse..." required="">
                                </div>
                                <div class="form-group ">
                                    <label for="inputstate" class="control-label">unite</label>
                                    <select class="form-control inputstate" name="unite">
                                        <option value="">Veuillez choisir...</option>
                                        <option value="Kg">Kg</option>
                                        <option value="Sac">Sac</option>
                                    </select>
                                </div>

                            </div>
                            <!-- End col-md-6 -->
                            {{-- <div class="col-md-6">
                                   <div class="form-group">
                                     <label class=" control-label" for="inputlname">Last Name</label>
                                     <input type="text" class="form-control" id="inputlname" placeholder="Enter your last name...">
                                 </div>
                                 <div class="form-group">
                                     <label class=" control-label" for="inputphone">Phone Number</label>
                                     <input type="text" class="form-control" id="inputphone" placeholder="Enter your phone number...">
                                 </div>
                                 <div class="form-group">
                                     <label class=" control-label" for="inputstate">State</label>
                                     <input type="text" class="form-control" id="inputstate" placeholder="Enter the apartment. floor, suite, etc...">
                                 </div>
                                 <div class="form-group col-md-6 padding-left-0">
                                     <label for="inputstate" class="control-label">State</label>
                                     <select class="form-control inputstate">
                                         <option value="">Select your state...</option>
                                         <option value="BLUE">Blue</option>
                                         <option value="Red">Red</option>
                                         <option value="Yellow">Yellow</option>
                                     </select>
                                 </div>

                                 <div class="form-group col-md-6 padding-right-0 padding-left-20">
                                     <label class=" control-label" for="inputzipcode">Zip Code</label>
                                     <input type="text" class="form-control" id="inputzipcode" placeholder="Enter your Zip code...">
                                 </div>
                                 <div class="form-group">
                                     <label class=" control-label" for="inputscphone">Secondary Phone</label>
                                     <input type="text" class="form-control" id="inputscphone" placeholder="Enter your phone number...">
                                 </div>

                            </div>--}}
                            <!-- End col-md-6 -->
                            <div class="col-md-12">
                                <button type="submit" class="btn link-button">Enregistrer</button>
                            </div>
                        </form>
                    </div>
            </div>
            <!-- End Primary -->
        </div>
        <!-- End conainer -->
    </div>
@endsection