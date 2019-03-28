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
                        <td id ="<?php echo 'Num' . $i ;?>">{{$art->numéro}}</td>
                        <td id ="<?php echo 'titre' . $i; ?>"> {{$art->titre}}</td>
                        <td class="center" >
                            <div class="row">

                                <div class="btn-group btn-group-xs col-lg-2" role="group" >
                                    <button type="button"  id = "{{$i}}" class="btn btn-link btn-sm" style="padding-right: 3px;" onclick="preview(this);">Voir Les Articles</button>
                                    <span class="vl"></span>
                                    {!! Form::open(array('url' => 'allArt/' . $art->numéro , 'class' => 'pull-right')) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    <button  type="submit" class="btn btn-link btn-sm" style="padding: 3px; color: red" >Refusé </button>
                                    {{ Form::close() }}
                                    <span class="vl"></span>
                                    <button type="button" id = "{{$art->numéro}}" onclick="Edite(this);" class="btn btn-link btn-sm" style="padding-left: 3px;">Accepté</button>

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
