@extends('admin')
@section('content')
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Enregistrer une Cooperative</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Acceuil</a></li>
                        <li class="breadcrumb-item active">Enregistrer Cooperative</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>
        <div class="row">

            <div class="col-lg-12">
                <form method="POST" action="{{ url('cooperation') }}" class="user" enctype="multipart/form-data">
                    <!-- Default Card Example -->
                    <div class="card m-b-30">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <div class="p-5">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class=" control-label">Name</label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                            @endif

                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class=" control-label">Telephone</label>


                                            <input id="email" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" required>

                                            @if ($errors->has('telephone'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                            @endif

                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class=" control-label">Adresse</label>


                                            <input id="email" type="text" class="form-control" name="adresse" value="{{ old('adresse') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                            @endif

                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class=" control-label">E-Mail Address</label>


                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif

                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class=" control-label">Password</label>


                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif

                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm" class=" control-label">Confirm Password</label>


                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                        </div>
                                        <div class="form-group lg-4">
                                            <input type="text" class="form-control form-control-user" name="libelle" id="type"  placeholder="Entrer le nom du produit..." required>
                                        </div>
                                        <div class="form-group lg-4">
                                            <label>Fichier</label>
                                            <input type="file"  name="doc" id="type"  placeholder="..." required>
                                        </div>
                                        <input type="hidden" name="role_id" value="4">
                                        <input type="submit" class="btn btn-primary  btn-block" value="Enregistrer">
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