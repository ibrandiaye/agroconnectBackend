@extends('admin')
@section('content')
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Enregistrer un produit</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Acceuil</a></li>
                        <li class="breadcrumb-item active">Enregistrer un produit</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>

        <div class="row">

            <div class="col-lg-12">
                <form method="POST" action="{{ url('conseil') }}" class="user" enctype="multipart/form-data">
                    <!-- Default Card Example -->
                    <div class="card m-b-30">
                        <div class="card border-left-primary mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="p-5">
                                            {{ csrf_field() }}
                                            <div class="form-group lg-12">
                                                <label>Titre</label>
                                                <input type="text" class="form-control form-control-user" name="titre" id="type"  placeholder="Entrer le nom du produit..." required>
                                            </div>
                                            <div class="form-group lg-12">
                                                <label>Description</label>
                                                <textarea name="desctiption" id="elm1"></textarea>
                                                {{--<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                                                <script>
                                                    CKEDITOR.replace( 'description' );
                                                </script>--}}
                                            </div>
                                            <div class="form-group lg-12">
                                                <label>Image</label>
                                                <input type="file" class="form-control form-control-user" name="filename" id="type"  placeholder="Entrer le type du client..." required>
                                            </div>
                                            <div class="form-group lg-12">
                                                <label>Audio</label>
                                                <input type="file" class="form-control form-control-user" name="audios" id="type"  placeholder="Entrer le type du client..." >
                                            </div>
                                            <div class="form-group lg-12">
                                                <input type="url" class="form-control form-control-user" name="video" id="type"  placeholder="Entrer url du video..." >
                                            </div>
                                            <input type="submit" class="btn btn-primary waves-effect waves-light btn-rounded" value="Enregistrer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="/plugins/tinymce/tinymce.min.js"></script>
    <script>
        $(document).ready(function () {
            if($("#elm1").length > 0){
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height:300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]
                });
            }
        });
    </script>
@endsection

{{--
@extends('admin')
@section('content')
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Enregistrer une conseil</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Acceuil</a></li>
                        <li class="breadcrumb-item active">une Bulletin de meteo</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>

        <div class="row">

            <div class="col-lg-12">
                <form method="POST" action="{{ url('publication') }}" class="user" enctype="multipart/form-data">
                    <!-- Default Card Example -->
                    <div class="card m-b-30">
                        <div class="card border-left-primary mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="p-5">
                                            {{ csrf_field() }}
                                            <div class="form-group lg-12">
                                                <input type="text" class="form-control form-control-user" name="titre" id="type"  placeholder="Entrer le titre..." required>
                                            </div>
                                            <div class="form-group lg-12">
                                                <label>Description</label>
                                                <textarea name="libelle" id="elm1"></textarea>
                                                --}}
{{--<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                                                <script>
                                                    CKEDITOR.replace( 'description' );
                                                </script>--}}{{--

                                            </div>

                                            <div class="form-group lg-12">
                                                <label>Audio</label>
                                                <input type="file" class="form-control form-control-user" name="audios" id="type"  placeholder="Entrer le type du client..." >
                                            </div>
                                            <div class="form-group lg-12">
                                                <label>Image</label>
                                                <input type="file" class="form-control form-control-user" name="images" id="type"  placeholder="Entrer le type du client..." >
                                            </div>
                                            <div class="form-group lg-12">
                                                <input type="url" class="form-control form-control-user" name="video" id="type"  placeholder="Entrer url du video..." >
                                            </div>
                                            <input type="submit" class="btn btn-primary waves-effect waves-light btn-rounded" value="Enregistrer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="/plugins/tinymce/tinymce.min.js"></script>
    <script>
        $(document).ready(function () {
            if($("#elm1").length > 0){
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height:300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]
                });
            }
        });
    </script>
@endsection

.--}}
