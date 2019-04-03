@extends('app.Squelette')


@section('contenu')

    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Bootstrap dataTables</div>
        </div>
        <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="example">
                <thead>
                <tr>
                    <th>Numero</th>
                    <th>Prix</th>
                    <th>Option</th>

                </tr>
                </thead>
                <tbody>

                <?php $i=0 ; ?>
                @foreach($comme as $art)
                    <tr class="odd gradeX">
                        <td id ="<?php echo 'Num' . $i ;?>">{{$art->num_commande}}</td>
                        <td id ="<?php echo 'titre' . $i; ?>"> {{$art->Prix}}</td>
                        <td class="center" >
                            <div class="row">

                                <div class="btn-group btn-group-xs col-lg-2 col-lg-offset-9" role="group" >
                                    <button type="button"  id = "{{$art->num_commande}}" class="btn btn-link btn-sm" style="padding-right: 3px;" onclick="preview(this);">Plus d'informations</button>
                                    <span class="vl"></span>
                                    {!! Form::open(array('url' => '/dashbord/CourierAnomali/' . $art->num_commande , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'GET') }}
                                    <button  type="submit" class="btn btn-link btn-sm" style="padding: 3px; color: red" >Refusé </button>
                                    {{ Form::close() }}
                                    <span class="vl"></span>
                                    {!! Form::open(array('url' => '/dashbord/anomalie/' . $art->num_commande , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'GET') }}
                                    <button type="submit" id = "{{$art->numéro}}" onclick="Edite(this);" class="btn  btn-sm btn-light" style="padding-left: 3px;">Accepté</button>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </td>

                    </tr>
                    <?php $i++ ; ?>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>


    <div id="myModal2" class="modal dropdown animated zoomIn col-md-7 " style="top: 200px; margin-left: 20%;">
        <div class="card card-register mx-auto mt-4">
        <nav id="menuzord" class="menuzord">
            <ul class="menuzord-menu " style="margin-left: 42%">
                <li><a href="#" onclick="cheque()">Chéque</a></li>
                <li><a href="#" onclick="cart()" >Cart</a></li>

            </ul>
        </nav>
        <div class="modal-content animated zoomIn " id="myModal" style="display: none">

            <div class="container">


                    <div class="card-body">


                        <div class="from-group">
                            <div class="form-label-group">
                                <label class="label-input100" for="firstName">Numero De Cart</label>
                                <input type="number" id="Numero" class="form-control input100" style="width: 90%" required="required" autofocus="autofocus">

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





                    </div>






                </div>
            </div>

            <div class="modal-content animated zoomIn " id="myModal1" style="display: none">


                <div class="container">


                    <div class="card-body">


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-label-group" style="margin-left: 20%">
                                        <label class="label-input100" for="firstName">cheque en attente ?</label>
                                        <input type="button" id="attente" class="btn-primary btn-md input100" value="Bannire" style="width: 90%" required="required" autofocus="autofocus">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group" style="margin-left: 40%">
                                        <label class="label-input100" for="firstName">cheque en arrivé ?</label>
                                        <input type="button" id="ariver" class="btn-danger btn-md input100" value="accepte" style="width: 90%" required="required" autofocus="autofocus">

                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>



            </div>
            </div>
            <div class="row" style="margin-top: 50px">

                <button type="button" class="btn btn-md btn-danger col-lg-offset-5 "  id="btnEdit1" href="#">Annulé</button>

            </div>

        </div>
    </div>


@stop

@section('js')


    <script src="http://localhost/www/Prog/public/js/jquery.dataTables.min.js"></script>

    <script src="http://localhost/www/Prog/public/js/dataTables.bootstrap.js"></script>

    <script src="http://localhost/www/Prog/public/js/custom.js"></script>
    <script src="http://localhost/www/Prog/public/js/tables.js"></script>
    <script>
        var preview = function (obj) {
            $('#myModal2').css('display','block');

        }
        var cheque = function () {

            $('#myModal').css('display','none');
            $('#myModal1').css('display','block');



        }
        var cart = function () {

            $('#myModal1').css('display','none');
            $('#myModal').css('display','block');



        }
    </script>

@stop