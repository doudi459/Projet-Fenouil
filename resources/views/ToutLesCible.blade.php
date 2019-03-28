@extends('app.Squelette')



@section('contenu')



    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Tout Les Cibles</div>
        </div>
        <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="example">
                <thead>
                <tr>
                    <th>Numero</th>
                    <th>age</th>
                    <th>adress</th>
                    <th>socio_pro</th>
                    <th class="text-lg-left">Action</th>

                </tr>
                </thead>
                <tbody>

                <?php $i=0 ; ?>
                @foreach($arts as $art)
                    <tr class="odd gradeX">
                        <td id ="<?php echo 'Num' . $i ;?>">{{$art->num_cible}}</td>
                        <td id ="<?php echo 'titre' . $i; ?>">@if($art->age == null) Null @else {{$art->age}}  @endif </td>
                        <td id ="<?php echo 'prix' . $i; ?>" >@if($art->socio_pro == null) Null @else {{$art->socio_pro}} @endif </td>
                        <td id ="<?php echo 'prix' . $i; ?>" >@if($art->adress == null) Null @else {{$art->adress}} @endif </td>
                        <td class="center" >
                            <div class="row">
                                <div class="btn-group btn-group-xs col-lg-2" role="group" >
                                    <button type="button"  id = "{{$i}}" class="btn btn-link btn-sm" style="padding-right: 3px;" onclick="preview(this);">Voir</button>
                                    <span class="vl"></span>
                                    {!! Form::open(array('url' => 'allArt/' . $art->num_cible , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    <button  type="submit" class="btn btn-link btn-sm" style="padding: 3px; color: red" >Supprimer </button>
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









@stop

@section('js')

    <script src="js/jquery.dataTables.min.js"></script>

    <script src="js/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>

@stop