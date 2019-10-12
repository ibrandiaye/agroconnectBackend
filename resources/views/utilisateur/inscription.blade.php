@extends("welcome")

@section("content")
    <div class="main-content my-account">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">My account</li>
            </ul>
            <div id="secondary" class="widget-area col-xs-12 col-md-3">
                <aside class="widget widget_product_categories">
                    <h3 class="widget-title">Welcome back!</h3>
                    <ul>
                        <li><a href="#" title="Personal Information">Personal Information</a></li>
                        <li><a href="#" title="Billing Information">Billing Information</a></li>
                        <li><a href="#" title="Shipping Information">Shipping Information</a></li>
                    </ul>
                </aside>
            </div>
            <!-- End Secondary -->
            <div id="primary" class="col-xs-12 col-md-9">
                <div class="title-product">
                    <h3>Personal information</h3>
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
                    <form class="form-horizontal" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class=" control-label" for="inputfname">Nom</label>
                                <input type="text" name="name" class="form-control" id="inputfname" placeholder="Entrer votre Nom..." required>
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="inputmail">Email</label>
                                <input type="email" name="email" class="form-control" id="inputmail" placeholder="Enter your mail..." required="">
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="inputmail">Adresse</label>
                                <input type="text" name="adresse" class="form-control" id="telephone" placeholder="Entrer votre Adresse..." required="">
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="inputmail">Téléphone</label>
                                <input type="number" name="telephone" class="form-control" id="telephone" placeholder="Entrer votre téléphone..." required="">
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="inputmail">Mot de Passe</label>
                                <input type="password" name="password" class="form-control" id="inputmail" placeholder="Entrer Votre Mot de passe..." required="">
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="inputmail">Repéter votre Mot de Passe</label>
                                <input type="password" name="password_confirmation" class="form-control" id="inputmail" placeholder="Répeter Votre Mot de passe..." required="">
                            </div>
                            <div class="form-group">
                                <label for="inputCountry" class=" control-label">Vous êtes</label>
                                <select id="inputRole" class="form-control" name="role_id">
                                    <option value="">Vous êtes...</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" id="cni">
                                <label class=" control-label" for="inputmail">CNI</label>
                                <input type="number" name="cni" class="form-control" id="inputmail" placeholder="Votre CNI" required>
                            </div>
                            <button type="submit" class="btn link-button" value="Submit">Save all changes</button>
                        </div>
                      <!-- End col-md-6 -->
                        {{-- <div class="col-md-6">
                               <div class="form-group">
                                 <label class=" control-label" for="inputlname">Last Name</label>
                                 <input type="text" class="form-control" id="inputlname" placeholder="Enter your last name...">
                             </div>
                             <div class="form-group">
                                 <label class=" control-label" for="inputphone">Phone Number</label>
                                 <input type="text" class="form-control" id="inputphone" placeholder="Enter your phone number...">
                             </div>
                             <div class="form-group">
                                 <label class=" control-label" for="inputstate">State</label>
                                 <input type="text" class="form-control" id="inputstate" placeholder="Enter the apartment. floor, suite, etc...">
                             </div>
                             <div class="form-group col-md-6 padding-left-0">
                                 <label for="inputstate" class="control-label">State</label>
                                 <select class="form-control inputstate">
                                     <option value="">Select your state...</option>
                                     <option value="BLUE">Blue</option>
                                     <option value="Red">Red</option>
                                     <option value="Yellow">Yellow</option>
                                 </select>
                             </div>

                             <div class="form-group col-md-6 padding-right-0 padding-left-20">
                                 <label class=" control-label" for="inputzipcode">Zip Code</label>
                                 <input type="text" class="form-control" id="inputzipcode" placeholder="Enter your Zip code...">
                             </div>
                             <div class="form-group">
                                 <label class=" control-label" for="inputscphone">Secondary Phone</label>
                                 <input type="text" class="form-control" id="inputscphone" placeholder="Enter your phone number...">
                             </div>

                        </div>--}}
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
    </div> <script>
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

@endsection