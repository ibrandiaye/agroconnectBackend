@extends('admin')
@section('content')
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Enregistrer une parcelle</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Acceuil</a></li>
                        <li class="breadcrumb-item active">Enregistrer parcelle</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>
        <div class="row">

            <div class="col-lg-12">
                <form method="POST" action="{{ url('parcelle') }}"  enctype="multipart/form-data">
                    <!-- Default Card Example -->
                    <div class="card m-b-30">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <div class="p-5">
                                        {{ csrf_field() }}
                                        <div class="form-group lg-4">
                                            <label>Superficie</label>
                                            <input type="text" class="form-control form-control-user" name="superficie" id="superficie"  placeholder="Superficie" required>
                                        </div>
                                        <div class="form-group lg-4">
                                                <label>Latitude</label>
                                                <input type="text" class="form-control form-control-user" name="latitude" id="lat"  placeholder="Latitude" required>
                                        </div>
                                        <div class="form-group lg-4">
                                                <label>Longitude</label>
                                                <input type="text" class="form-control form-control-user" name="longitude" id="long" placeholder="Longitude" required>
                                        </div>
                                        <div class="form-group lg-4">
                                            <label>Image</label>
                                            <input type="file"  name="filename" id="filename"  required>
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
    </div>

@endsection