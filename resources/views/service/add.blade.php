@extends("welcome")

@section("content")
    <div class="main-content my-account">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Ajouter Service</li>
            </ul>
            <div id="secondary" class="widget-area col-xs-12 col-md-3">
                <aside class="widget widget_product_categories">
                    <h3 class="widget-title">Welcome back!</h3>
                </aside>
            </div>
            <!-- End Secondary -->
            <div id="primary" class="col-xs-12 col-md-9">
                <div class="title-product">
                    <h3> Formulaire Service</h3>
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
                        <form class="form-horizontal" method="POST" action="{{ url('service') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class=" control-label" for="inputPrixUnitaire">Titre</label>
                                <input type="text" name="titre" class="form-control" id="PrixUnitaire" placeholder="Titre" required="">
                            </div>

                            <div class="form-group">
                                <label class=" control-label" for="inputfname">description</label>
                                <textarea class="form-control" name="description"></textarea>
                                <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                                <script>
                                    CKEDITOR.replace( 'description' );
                                </script>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputCountry" class=" control-label">Categorie</label>
                                    <select id="inputRole" class="form-control" name="sousCategorie_id">
                                        <option value="">Veuillez choisir..</option>
                                        @foreach($sousCategories as $souCategorie)
                                            <option value="{{ $souCategorie->id }}">{{ $souCategorie->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>
                            <input type="hidden" name="type" value="publique">
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