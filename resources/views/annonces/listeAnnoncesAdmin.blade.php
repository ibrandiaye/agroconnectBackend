@extends('admin')
@section('css')
    <link href="/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Liste des Annonces</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Acceuil</a></li>
                        <li class="breadcrumb-item active">Liste des Annonces</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Produit</th>
                                <th>Prix Unitaire</th>
                                <th>Quantite</th>
                                <th>sous Categorie</th>
                                <th>Categorie</th>
                                <th>Annonceur</th>
                                <th>Téléphone</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($annonces as $annonce)
                                <tr>
                                    <td><img src="/categorie/{{ $annonce->produit->image }}" class=" img-fluid rounded-circle" style="max-width: 50px; max-height: 50px;"></td>
                                    <td>{{ $annonce->produit->libelle }}</td>
                                    <td>{{ $annonce->prix_unitaire }}</td>
                                    <td>{{ $annonce->quantite }}</td>
                                    <td>{{ $annonce->produit->sousCategorie->libelle }}</td>
                                    <td>{{ $annonce->produit->sousCategorie->categorie->libelle }}</td>
                                    <td>{{ $annonce->user->name }}</td>
                                    <td>{{ $annonce->user->telephone}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="/plugins/datatables/jszip.min.js"></script>
    <script src="/plugins/datatables/pdfmake.min.js"></script>
    <script src="/plugins/datatables/vfs_fonts.js"></script>
    <script src="/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/plugins/datatables/buttons.print.min.js"></script>
    <script src="/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="/asset/pages/datatables.init.js"></script>
@endsection