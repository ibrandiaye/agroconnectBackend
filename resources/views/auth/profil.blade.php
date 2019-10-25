@extends("welcome")

@section("content")
    <div class="main-content my-account">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Mon Compte</li>
            </ul>
            <div id="secondary" class="widget-area col-xs-12 col-md-3">
                <aside class="widget widget_product_categories">
                    <h3 class="widget-title">Bienvenue!</h3>
                    <ul>
                        <li><a href="{{route('mes.annonces')}}" title="Mes annonces">Mes annonces</a></li>
                        <li><a href="{{ route("mes.services") }}" title="Billing Information">Mes servives</a></li>
                        <li><a href="#" title="Shipping Information">Shipping Information</a></li>
                    </ul>
                </aside>
            </div>
            <!-- End Secondary -->
            <div id="primary" class="col-xs-12 col-md-9">
                <div class="title-product">
                    <h3>information personnel</h3>
                </div>
                <!-- End title  -->
                <div class="contact-form">
                    <form class="form-horizontal">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class=" control-label" for="inputfname">Nom </label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="inputfname" placeholder="Entrer votre nom...">
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="inputmail">Email</label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="inputmail" placeholder="Entrer votre email...">
                            </div>

                        </div>
                        <!-- End col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class=" control-label" for="inputlname">Nom</label>
                                <input type="text" name="adresse" value="{{$user->adresse}}" class="form-control" id="inputlname" placeholder="Entrer votre nom...">
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="inputphone">Téléphone</label>
                                <input type="text" name="telephone" value="{{ $user->telephone }}" class="form-control" id="inputphone" placeholder="Entrer votre telephone...">
                            </div>

                            <button type="submit" class="btn link-button" value="Submit">Sauvegarder</button>
                        </div>
                        <!-- End col-md-6 -->
                        <div class="col-md-12">
                            <button type="submit" class="btn link-button"></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Primary -->
        </div>
        <!-- End conainer -->
    </div>
@endsection