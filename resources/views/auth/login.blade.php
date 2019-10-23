@extends('layouts.login')

@section('content')
  <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
                <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
            </div>
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">

                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Agroconnect</h5>
                        <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}


                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                        <div class="col-12">
                                                <label>Username</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <div class="col-12">
                                                <label for="password">Password</label>
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
                                        <div class="checkbox checkbox-primary">
                                                <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="remember" class="custom-control-input" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="customCheck1">
                                                            Remember Me
                                                        </label>
                                                </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center m-t-20">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn btn-primary btn-block btn-lg waves-effect waves-light">
                                            Connexion
                                        </button>
                                    </div>

                                    {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a> --}}
                                    <div class="form-group row m-t-30 m-b-0">
                                        <div class="col-sm-7">
                                            <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Mot de passe oublié?</a>
                                        </div>
                                        <div class="col-sm-5 text-right">
                                            <a href="pages-register.html" class="text-muted">Créer un Compte</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>

                </div>
            </div>
        <!-- END wrapper -->
{{--  --}}
@endsection
