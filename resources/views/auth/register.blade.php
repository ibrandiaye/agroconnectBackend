@extends('layouts.login')

@section('content')
<div class="accountbg"></div>
    <div class="home-btn d-none d-sm-block">
                <a href="/" class="text-white"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="wrapper-page">
            <div class="card card-pages shadow-none" style="width: 600px; left: -69px; top: -18px;">
                <div class="card-body" style="width: 600px; position: relative; left: -2px; top: 0px;">
                    <div class="text-center m-t-0 m-b-15">
                            <a href="/home" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a>
                    </div>

                    <h5 class="font-18 text-center">Création compte</h5>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-12">
                                        <label for="name" class="col-12 control-label">Name</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                             </div>
                            <div class="col-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-12">
                                        <label for="email" class="col-12 control-label">Telephone</label>
                                        <input id="email" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" required>

                                        @if ($errors->has('telephone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('telephone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-12">
                                        <label for="email" class="col-12 control-label">Adresse</label>
                                        <input id="email" type="text" class="form-control" name="adresse" value="{{ old('adresse') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('adresse') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-12">
                                        <label for="email" class="col-12 control-label">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    </div>
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-12">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-12">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <label for="inputCountry" class="col-md-4  control-label">Vous êtes</label>
                                <select id="inputRole" class="form-control" name="role_id">
                                    <option value="">Vous êtes...</option>
                                    @foreach($roles as $role)
                                         @if($role->libelle!='Admin' and $role->libelle!='Cooperative')
                                            <option value="{{ $role->id }}">{{ $role->libelle }}</option>
                                         @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="cni">
                            <div class="col-12">
                            <label class="col-md-4 control-label" for="inputmail">CNI</label>
                            <input type="number" name="cni" class="form-control" id="inputmail" placeholder="Votre CNI" required>
                            </div>
                        </div>


                        <div class="form-group text-center m-t-20">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn btn-primary btn-block btn-lg waves-effect waves-light">
                                    Enregister
                                </button>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
            </div>
            <script>
                    $(document).ready(function(){
                        $('#cni').hide();
                        $( "#inputRole" ).change(function() {
                            // function getMessage() {
                            inputRole = $("#inputRole").val();
                            if(inputRole!=3){
                                $('#cni').show();

                            }else{
                                $('#cni').hide();
                            }

                            // }
                        });

                    });

                </script>
        <!-- END wrapper -->

@endsection
