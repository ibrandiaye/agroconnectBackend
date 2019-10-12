@extends('admin')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Enregistrer une sous catégorie</h1>
    </div>

    <div class="row">

        <div class="col-lg-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ url('sous-categorie') }}" class="user" enctype="multipart/form-data">
                <!-- Default Card Example -->

                <div class="card border-left-primary mb-4">
                    <div class="card-header">
                        Enrgistrer un Produit
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="p-5">
                                    {{ csrf_field() }}
                                    <div class="form-group lg-4">
                                        <input type="text" class="form-control form-control-user" name="libelle" id="type"  placeholder="Entrer le nom du produit..." required>
                                    </div>
                                    <div class="form-group lg-4">
                                        <label>Image</label>
                                        <input type="file" class="form-control form-control-user" name="filename" id="type"  placeholder="Entrer le type du client..." required>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>
                                            Catégorie :
                                            <select class="form-control " name="categorie_id" required>
                                                @foreach($categories as $categorie)
                                                    <option value="{{ $categorie->id }}"> {{ $categorie->libelle }}</option>
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