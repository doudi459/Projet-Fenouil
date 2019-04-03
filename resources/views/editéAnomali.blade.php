@extends('app.Squelette')



@section('contenu')

<div class="container-fluid">
    <div class="row">
        <div class="card col-lg-6 col-sm-6 col-xs-6 " style="margin-left: 22%; width: 50% ">
            {!! Form::open(array('url' => "http://localhost/www/Prog/public/dashbord/editanomali/create ", 'class' => 'pull-right')) !!}
            {{ Form::hidden('_method', 'GET') }}
            <div class="card-body">

                <div class="form-group">
                    <label for="" class="label-input100"> Adress Email</label>
                    <input type="Email" name="email" id="email" class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}"  value="{{ old('email') }}" required autofocus  placeholder="Entre Votre Email">

                </div>
                <div class="form-group">
                    <label for="" class="label-input100"> Object </label>
                    <input type="text" name="titre" id="titre" class="input100 {{ $errors->has('titre') ? ' is-invalid' : '' }}"  value="{{ old('titre') }}" required autofocus placeholder="object">

                </div>
                <div class="form-group">
                    <label for="" class="label-input100"> Type Anomali</label>
                    <select name="sujet" id="sujet" class="input100 {{ $errors->has('categori') ? ' is-invalid' : '' }}"   required autofocus>
                        <option value="Anomali payment montant insufisant">Anomali payment montant insufisant</option>
                        <option value="Anomali chéque non signier" >Anomali chéque non signier</option>
                        <option value="Anomali chéque non reçu">Anomali chéque non reçu</option>
                        <option value="Anomali cart invalide">Anomali cart invalide</option>
                        <option value="Anomali cart date a expiré" >Anomali cart date a expiré</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="" class="label-input100"> Contenu :</label>
                    <textarea name="contenu"  cols="30" rows="10" id="tinymce_basic" style="height: 300px"></textarea>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-block btn-md btn-primary"> Envoyer Email  </button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

@stop
@section('js')

    <script src="http://localhost/www/Prog/public/js/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="http://localhost/www/Prog/public/js/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

    <script src="http://localhost/www/Prog/public/js/ckeditor/ckeditor.js"></script>
    <script src="http://localhost/www/Prog/public/js/ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript" src="http://localhost/www/Prog/public/js/tinymce/tinymce.min.js"></script>
    <script src="http://localhost/www/Prog/public/js/editors.js"></script>
    <script src="http://localhost/www/Prog/public/https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
@stop