@extends('app.indexsquelette')





@section('contenu')
    <section class="et-team-one et-innertm">
        <div class="container-fluid">
            <div class="row second-rawn">
                <div class="col-xs-12 col-sm-12 col-md-5 extraspac">
                    <div class="et-team-col et-innerteam">
                        <img class="img-responsive img-fluid" src="images/resource/photos1.jpg" style="height: 400px;" alt="">
                        <div class="et-teatmembr-contact">Commander</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 ">
                    <div class="row">
                        <div class="col-md-12 ">
                            <em class="text-capitalize">Article de Décoration</em>
                            <h2 class="text-thm">Article Titre </h2>
                            <p class="et-tmp-detls">Quisque maximus mauris vitae pellentesque molestie. Nullam aliquet, purus non faucibus elementum, arcu lacus maximus turpis, nec condimentum nisl enim sit amet elit. Suspendisse ac orci tristique, imperdiet ligula ullamcorper, auctor enim. Morbi finibus congue justo. Sed consectetur lectus ut massa pellentesque venenatis eget in dolor. Pellentesque pulvinar rutrum sodales. Sed a mollis ligula. Etiam felis quam, auctor ac dolor</p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-7 et-tm-skill">Apressiation <span class="text-thm">Titre Article</span></div>
                        <div class="col-md-6">
                            <!--Progress Levels-->
                            <div class="progress-levels et-one">
                                <div class="progress-box wow" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="box-title">Qualité Du Produit</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="90"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-box wow" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="box-title">Prix Du Produit</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="70"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="label-input100">
                            Quantité
                        </div>
                        <input type="number" class="input100  border-right-0 border-left-0 border-danger" value="1" min="1" max="5" placeholder="Indiquer La Qantité Que vous vouler" />

                    </div>
                    <div class="form-group">
                        <div class="label-input100">
                            Type De Réglement :
                        </div>
                        <div class="row">
                            <div class="col-lg-6 et-tm-skill">
                                <input type="radio" class=""  name="radio"  id="cheque"  placeholder="Indiquer La Qantité Que vous vouler" checked> Reglement par cheque.
                            </div>
                           <div class="col-lg-6 et-tm-skill">
                               <input type="radio" class="text-lg-left"  id="cart" name="radio"  value="Cart" placeholder="Indiquer La Qantité Que vous vouler"> <span class="text-thm">  Reglement par cart. </span>
                           </div>

                        </div>
                    </div>

                    <button type="button" class="rounded btn-lg btn-primary" onclick="Edite(this);" style="margin-top: 90px; height: 50px; width: 25%; margin-left: 23%;" > Commander </button>
                    <form id="Redirect" action="{{ route('login') }}"  style="display: none;">
                        @csrf
                    </form>
                </div>

                <div class="col-md-4">
                    <!-- separator: Google Map -->
                    <p class="label-input100">Nos Magasins :</p>
                    <div id="map-canvas" class="et-map" style="height: 320px;">

                    </div>
                </div>
            </div>
        </div>


    </section>
    <div id="myModal2" class="modal dropdown animated zoomIn col-md-7 col-md-offset-3" style="top: 200px;">

        <div class="modal-content ">

            <div class="container">
                <div class="card card-register mx-auto mt-5">
                    {!! Form::open(['methode' => 'post','action' => 'CommandeController@store']) !!}
                    <div class="card-body">


                        <div class="from-group">
                            <div class="form-label-group">
                                <label for="firstName">Nom</label>
                                <input type="text" id="Nom" class="form-control" placeholder="Nom" required="required" autofocus="autofocus">

                            </div>
                        </div>
                        <div class="from-group">
                            <div class="form-label-group">
                                <label for="firstName">Prenom</label>
                                <input type="text" id="Prenom" class="form-control" placeholder="Prenom" required="required" autofocus="autofocus">

                            </div>
                        </div>
                        <div class="from-group">
                            <div class="form-label-group">
                                <label for="firstName">Numero De Cart</label>
                                <input type="number" id="Numero" class="form-control"  required="required" autofocus="autofocus">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-label-group">
                                        <label for="firstName">Date d'expiration </label>
                                        <input type="date" id="Date" class="form-control"  required="required" autofocus="autofocus">

                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-label-group">
                                        <label for="Prix de vent">CVC/CVV</label>
                                        <input type="number" id="CVC" class="form-control" placeholder="CVC" required="required">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-md btn-primary col-lg-6"  id="btnEdit" href="#">Validé</button>
                            <button type="button" class="btn btn-md btn-danger col-lg-6 "  id="btnEdit1" href="#">Annulé</button>

                        </div>



                    </div>



                        {!! Form::close() !!}


                </div>
            </div>



        </div>
    </div>

    <div id="myModal" class="modal dropdown animated zoomIn col-md-3 col-md-offset-4" style="top: 200px;">

        <div class="modal-content ">

            <div class="container">

                    {!! Form::open(['methode' => 'post','action' => 'CommandeController@store']) !!}

                        <div class="from-groupe">

                            <img src ='images/validation.jpg' class='zoomIn rounded img-circle' style="right: 25%;">
                            <h5 class="text-lg-center text-thm et-tm-skill" >envoyer le cheque par courier </h5>
                            <h2 class="text-lg-center"> Commande validé avec succeé</h2>
                        </div>
                <button id="btn3" type="button" class="btn btn-primary btn-md">Validé</button>


            </div>
        </div>
    </div>
    <div id="myModal3" class="modal dropdown animated zoomIn col-md-3 col-md-offset-4" style="top: 200px;">

        <div class="modal-content ">

            <div class="container">

                {!! Form::open(['methode' => 'post','action' => 'CommandeController@store']) !!}

                <div class="from-groupe">

                    <img src ='images/erreur.png' class='zoomIn rounded img-circle' style="right: 25%;">
                    <h5 class="text-lg-center text-thm et-tm-skill" >Vous Devais possedé un compte pour pouvoire Passé une commande </h5>
                    <h2 class="text-lg-center"> Vous aller etre redirigé vere la page de connection</h2>
                </div>



            </div>
        </div>
    </div>





                    @stop

@section('js')

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
    <script src="js/jquery.googlemap.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $("#map-canvas").googleMap({
                zoom:15, // Initial zoom level (optional)
                coords: [48.6255811 ,2.4398007], // Map center (optional)
                type: "ROADMAP", // Map type (optional)
                address: "IBGBI université d'evry, Paris, France", // Postale Address
                infoWindow: {
                    content: '<p style="text-align:center;"><strong>Evry val d\'essone,</strong><br> Paris, France</p>'
                }
            });
            // Marker 2
            $("#map-canvas").addMarker({
                coords: [48.6255811 ,2.4398007]
            });
        });
    </script>
    <script>
        var Edite  = function (obj)
        {


                    @if (Route::has('login'))

                    @auth


            var chek1  = document.getElementById('cheque').checked;
            var chek2 = document.getElementById('cart').checked;

           if(chek2) {

               var modal = document.getElementById('myModal2');
               var btn2  = document.getElementById('btnEdit');
               var btn1  = document.getElementById('btnEdit1');

               obj.onclick = function () {
                   modal.style.display = 'block';
               };
               btn2.onclick = function () {
                   modal.style.display = 'none';
               };
               btn1.onclick = function () {
                   modal.style.display = 'none';
               }

               window.onclick = function () {
                   if (obj.target == modal) {
                       modal.style.display = "none";
                   }
               }
           }
           if(chek1){
               var modal = document.getElementById('myModal');
               var btn2  = document.getElementById('btn3');

               obj.onclick = function () {
                   modal.style.display = 'block';
               };
               btn2.onclick = function () {
                   modal.style.display = 'none';
               };

               window.onclick = function () {
                   if (obj.target == modal) {
                       modal.style.display = "none";
                   }
               }




           }
            @else
            var modal = document.getElementById('myModal3');
                modal.style.display = 'block';

            setTimeout('document.getElementById(\'Redirect\').submit();', 5000);

            @endauth

            @endif
        };


    </script>

@stop
