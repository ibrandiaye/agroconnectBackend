@extends('admin')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Enregistrer un produit</h1>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <form method="POST" action="{{ url('produit') }}" class="user" enctype="multipart/form-data">
                <!-- Default Card Example -->

                <div class="card border-left-primary mb-4">
                    <div class="card-header">
                        Enrgistrer un Produit
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="p-5">
                                    {{ csrf_field() }}
                                    <div class="form-group lg-12">
                                        <input type="text" class="form-control form-control-user" name="libelle" id="type"  placeholder="Entrer le nom du produit..." required>
                                    </div>
                                    <div class="form-group lg-12">
                                        <label>Description</label>
                                        <textarea name="description"></textarea>
                                        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.replace( 'description' );
                                        </script>
                                    </div>
                                    <div class="form-group lg-12">
                                        <label>Image</label>
                                        <input type="file" class="form-control form-control-user" name="filename" id="type"  placeholder="Entrer le type du client..." required>
                                    </div>
                                    <div class="form-group mb-12">
                                        <label>
                                            Type proposition:
                                            <select class="form-control " name="sous_categorie_id" required>
                                                @foreach($sousCategories as $souCategorie)
                                                    <option value="{{ $souCategorie->id }}"> {{ $souCategorie->libelle }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Enregistrer">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection