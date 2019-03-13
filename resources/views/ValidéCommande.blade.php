@extends('app.indexsquelette')




@section('contenu')

<div class="contener">
    <div class="row">


    <div class="card col-lg-offset-3 col-lg-6">
        <div class="card-body">
            <span class="text-thm et-tm-skill">
            Validé Votre commande
            </span>
            <div class="progress-levels et-one">
            <div class="progress-box wow" data-wow-delay="100ms" data-wow-duration="1500ms">

                <div class="inner">
                    <div class="bar">
                        <div class="bar-innner"><div class="bar-fill" data-percent="100"><div class="percent"></div></div></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-responsive" style="height: 100px;" src="" alt="">
                </div>
                <div class="col-lg-8" >
                    <div class="row">
                        <h3 class="col-lg-4 text-thm">Titre :  </h3>
                        <h3 class="col-lg-4 text-thm"> Prix :  </h3>
                        <h3 class="col-lg-3 text-thm"> Qantité :  </h3>
                        <h3> <span class="col-lg-1 glyphicon glyphicon-remove" style="color: red;"></span></h3>
                    </div>
                       <p>dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd </p>
                    <div class="et-slash">///////////////////////////////////////////////////////////////////////////////////////////////////////////</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-responsive" style="height: 100px;" src="" alt="">
                </div>
                <div class="col-lg-8" >
                    <div class="row">
                        <h3 class="col-lg-5 text-thm">Titre :  </h3>
                        <h3 class="col-lg-6 text-thm"> Prix :  </h3>
                        <h3> <span class="col-lg-1 glyphicon glyphicon-remove" style="color: red;"></span></h3>

                    </div>
                    <p>dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd </p>
                    <div class="et-slash">///////////////////////////////////////////////////////////////////////////////////////////////////////////</div>
                </div>
            </div>
            <div class="row col-lg-offset-8">

            </div>
        </div>


        <div class="card-footer">
            <div class="row">
                <div>
            <button class="btn btn-primary btn-md" onclick="Edite(this);" style="height: 40px;">Validé commande</button>
            <button class="btn btn-danger btn-md" style="height: 40px;">Annulé Comande</button>
                </div>
                <h3 class="text-center text-thm col-lg-offset-6" style="height: 40px;"> Prix Totale  : </h3>
                <input type="number" style="width: 15%; ">
            </div>
        </div>

    </div>

    </div>


</div>


<div id="myModalU" class="modal dropdown animated zoomIn col-md-6 col-md-offset-3" style="top: 200px;">

    <div class="modal-content ">

        <div class="form-group">
            <div class="label-input100">
                Type De Réglement :
            </div>
            <div class="row ">
                <div class="col-lg-2"></div>
                <div class="col-lg-5 et-tm-skill">
                    <input type="radio" class=""  name="radio"  id="cheque"  placeholder="Indiquer La Qantité Que vous vouler" checked> Reglement par cheque.
                </div>
                <div class="col-lg-5 et-tm-skill">
                    <input type="radio" class="text-lg-left"  id="cart" name="radio"  value="Cart" placeholder="Indiquer La Qantité Que vous vouler"> <span class="text-thm">  Reglement par cart. </span>
                </div>

            </div>
        </div>

        <button type="button" class="rounded btn-lg btn-primary" onclick="Edite2(this);" style="margin-top: 40px; height: 30px; width: 15%; margin-left: 44%;" > Validé </button>



    </div>
</div>

<div id="myModal2" class="modal dropdown animated zoomIn col-md-7 " style="top: 200px; margin-left: 20%;">

    <div class="modal-content ">

        <div class="container">
            <div class="card card-register mx-auto mt-5">

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

<div id="myModal" class="modal dropdown animated zoomIn col-md-3 col-md-offset-4" style="top: 200px; margin-left: 37%;">

    <div class="modal-content ">

        <div class="container">



            <div class="from-groupe">

                <img src ='http://localhost/www/Prog/public/images/validation.jpg' class='zoomIn rounded img-circle' style="right: 25%;">
                <h5 class="text-lg-center text-thm et-tm-skill" >envoyer le cheque par courier </h5>
                <h2 class="text-lg-center"> Commande validé avec succeé</h2>
            </div>
            <button id="btn3" type="button" class="btn btn-primary btn-md">Validé</button>


        </div>
    </div>
</div>












@stop

@section('js')
    <script>
        var Edite  = function (obj)
        {

                var modal = document.getElementById('myModalU');

                modal.style.display = 'block';

                window.onclick = function () {
                    if (obj.target == modal) {
                        modal.style.display = "none";
                    }
                }

        };

        var Edite2  = function (obj)
        {
            var modal = document.getElementById('myModalU');

            modal.style.display = 'none';



            var chek1  = document.getElementById('cheque').checked;
            var chek2 = document.getElementById('cart').checked;


            if(chek2 == true) {

                var modal = document.getElementById('myModal2');
                var btn2  = document.getElementById('btnEdit');
                var btn1  = document.getElementById('btnEdit1');


                modal.style.display = 'block';

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
            if(chek1 == true){

                var quantité = document.getElementById('');



                var modal = document.getElementById('myModal');
                var btn2  = document.getElementById('btn3');


                modal.style.display = 'block';

                btn2.onclick = function () {
                    modal.style.display = 'none';
                };

                window.onclick = function () {
                    if (obj.target == modal) {
                        modal.style.display = "none";
                    }
                }




            }

        };



    </script>

@stop