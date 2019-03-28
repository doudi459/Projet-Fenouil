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
            @if(isset($Arts))
                <?php $valeur = 0 ; ?>
                @foreach($Arts as $art)

            <div class="row" id="{{$art->numro}}">
                <div class="col-lg-4">
                    <img class="img-responsive" style="height: 100px;width: 100%;" src="images/{{$art->imag}}" alt="">
                </div>
                <div class="col-lg-8" >
                    <div class="row">
                        <h3 class="col-lg-4 text-thm">Titre : {{$art->titre}} </h3>
                        <h3 class="col-lg-4 text-thm"> Prix : {{$art->Prixdevents}}</h3>
                        <h3 class="col-lg-3 text-thm"> Qantité : {{$art->qantite}} </h3>
                        <h3> <span onclick="Supprim(this)" data-id="{{$art->numro}}"  data-prix ="{{$art->Prixdevents}}" data-qantit = "{{$art->qantite}}" class="col-lg-1 glyphicon glyphicon-remove" style="color: red;"></span></h3>
                    </div>
                    <br>
                    <br>
                    <div class="et-slash">///////////////////////////////////////////////////////////////////////////////////////////////////////////</div>
                </div>
            </div>
                    <?php $valeur = $valeur + $art->Prixdevents * $art->qantite ; ?>
          @endforeach
                @endif

        </div>


        <div class="card-footer">
            <div class="row">
                <div>
            <button class="btn btn-primary btn-md" onclick="Edite(this);" style="height: 40px;">Validé commande</button>
            <button class="btn btn-danger btn-md" style="height: 40px;">Annulé Comande</button>
                </div>
                <h3 class="text-center text-thm col-lg-offset-6" style="height: 40px;"> Prix Totale  : </h3>
                @if(isset($Arts))
                <input type="number" id="Totale" value="{{$valeur}}" DISABLED style="width: 15%; ">
                    @else
                    <input type="number" value="0" style="width: 15%; ">
                    @endif
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
                            <label class="label-input100" for="firstName">Numero De Cart</label>
                            <input type="number" id="Numero" class="form-control input100"  required="required" autofocus="autofocus">

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-5">
                                <div class="form-label-group" style="margin-left: 20%">
                                    <label class="label-input100" for="firstName">Date d'expiration </label>
                                    <input type="date" id="Date" class="form-control input100 " style="width: 70%;" required="required" autofocus="autofocus">

                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-label-group" style="margin-left: 40%">
                                    <label class="label-input100" for="Prix de vent">CVC/CVV</label>
                                    <input type="number" id="CVC" min="0" max="9999" class="form-control input100 " style="width: 40%;" placeholder="CVC" required="required">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <button type="button" class="btn btn-md btn-primary col-lg-6" onclick="enregistraisCart();"  id="btnEdit" href="#">Validé</button>
                        <button type="button" class="btn btn-md btn-danger col-lg-6 "  id="btnEdit1" href="#">Annulé</button>

                    </div>



                </div>



                {!! Form::close() !!}


            </div>
        </div>



    </div>
</div>

<div id="myModal" class="modal dropdown animated zoomIn col-md-3 col-md-offset-4" style="top: 150px; margin-left: 37%;">

    <div class="modal-content ">

        <div class="container">


                <!-- separator: Google Map -->
                <p class="label-input100">Nos Magasins :</p>
                <div id="map-canvas" class="et-map" style="height: 320px;">

                </div>


            <div class="from-groupe">

                <h5 class="text-lg-center text-thm et-tm-skill" >envoyer le cheque par courier a cette adress: </h5>
                <h2 class="text-lg-center">23 Boulevard de France, 91037 Évry</h2>
            </div>
            <button id="btn3" type="button"  class="btn btn-primary btn-md btn-block">Validé</button>


        </div>
    </div>
</div>



    <div id="myModalCv" class="modal dropdown animated zoomIn col-md-3 col-md-offset-4" style="top: 150px; margin-left: 37%;">

        <div class="modal-content ">

            <div class="container">
                <div class="from-groupe">

                    <img src ='http://localhost/www/Prog/public/images/validation.jpg' class='zoomIn rounded img-circle' style="right: 25%;">
                    <h5 class="text-lg-center text-thm et-tm-skill" >Commande enregistrais</h5>
                </div>


            </div>
        </div>
    </div>












            @stop

@section('js')
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
    <script src="http://localhost/www/Prog/public/js/jquery.googlemap.js"></script>

    <script>
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
//******************************************************************************Edit 1**********************************************************************

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
//*********************************************************************************Edit 2 *******************************************************************
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


                    var numero = $("#Numero").val();
                    var cvv = $("#CVC").val();
                    var dateval = $("#Date").val();
                    var total = document.getElementById('Totale').value;
                    if (/[0-9]{16}/.test(numero) && /[0-9]{3,4}/.test(cvv))

                    {
                        modal.style.display = 'none';
                    var Cart = {
                        numero: numero,
                        cvv: cvv,
                        total: total,
                        dateval: dateval
                    };


                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({

                        type: 'put',
                        url: 'ValidéCommande/' + @if(isset($art->num_commande)) {{$art->num_commande}} @else d @endif,
                        data: {Cart: Cart},
                        success: function (data) {
                            console.log(data);
                        },
                        error: function (xhr) {
                            console.log(xhr.responseText);
                        }
                    });

                    var mo = $("#myModalCv");
                    mo.css('display', "block");
                    setTimeout('window.location.replace("/www/Prog/public/");', 5000);
                }
                    else
                    {
                        alert('Une Erreur est survenu votre Numero de cart ou votre CVV et incorrect.');
                    }
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



                var modal = document.getElementById('myModal');
                var btn2  = document.getElementById('btn3');


                modal.style.display = 'block';

                btn2.onclick = function () {
                    modal.style.display = 'none';
                    var total = document.getElementById('Totale').value;
                    var Cheque = {total:total};

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({

                        type: 'put',
                        url:'ValidéCommande/' +  @if(isset($art->num_commande)) {{$art->num_commande}} @else d @endif,
                        data: {Cheque:Cheque},
                        success: function (data) {
                            console.log(data);
                        },
                        error:function (xhr) {
                            console.log(xhr.responseText);
                        }
                    });

                    var mo = $("#myModalCv");
                    mo.css('display',"block");
                    //setTimeout('window.location.replace("/www/Prog/public/");',5000);


                };



                window.onclick = function () {
                    if (obj.target == modal) {
                        modal.style.display = "none";
                    }
                }




            }

        };

        //**********************************************supr element *******************************************************
        var Supprim = function (obj) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           var id= obj.dataset.id ;
           var model = document.getElementById(id);
            var qantit = obj.dataset.qantit ;
            var prix= obj.dataset.prix ;
            var total = document.getElementById('Totale');
            total.value = total.value - prix * qantit ;
           model.style.display = 'none';
            $.ajax({

                type: 'delete',
                url:'ValidéCommande/' + id + ' ' + @if(isset($art->num_commande)) {{$art->num_commande}} @else d @endif,
                data: {num_com:id},
                success: function (data) {
                    console.log(data);
                },
                error:function (xhr) {
                    console.log(xhr.responseText);
                }
            })


        };


    //**************************************************************** enregistrais Cart ****************************************************

    </script>


@stop