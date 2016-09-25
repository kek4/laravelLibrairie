@extends('layout')

@section('css')
  @parent
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
@endsection
@section('js')
  @parent
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
  {{-- <script src="{{ asset('js/add.js')}}"></script> --}}
  <script type="text/javascript">
  $("#editionDate").datepicker({
  });
  </script>
  @if(Session::has('success'))
    <script>toastr.success("{{ Session::get('success') }}", "Bravo !")</script>
  @endif
@endsection


@section('content')
  <div id="content">
    <h2><i class="icon-align-justify"></i> Formulaire d'enregistrement d'un auteur</h2>
    @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <div class="widget-content nopadding">
      <form role="form" method="post" action="" class="form-horizontal">
        {{ csrf_field() }}
        <div class="control-group @if($errors->has('name')) has-warning @elseif(count($errors) > 0) has-success @endif">
          <label class="control-label">Nom :</label>
          <div class="controls">
            <input class="span11" type="text" id="name" name="name" value="{{ old('name') }}">
            @if($errors->has('name'))
              <span class="help-block">{{ $errors->first('name')}}</span>
            @endif
          </div>
        </div>
        <div class="control-group @if($errors->has('firstname')) has-warning @elseif(count($errors) > 0) has-success @endif">
          <label class="control-label">Prénom :</label>
          <div class="controls">
            <input class="span11" type="text" id="firstname" name="firstname" value="{{ old('firstname') }}">
            @if($errors->has('firstname'))
              <span class="help-block">{{ $errors->first('firstname')}}</span>
            @endif
          </div>
        </div>
        <div class="control-group @if($errors->has('gender')) has-warning @elseif(count($errors) > 0) has-success @endif">
          <label class="control-label">Sexe :</label>
          <div class="controls">
            <div class="radio">
              <input @if(old("gender") == "1") checked @endif name="gender"  type="radio" id="male" value="1">
                <label for="male">Homme</label>
                <input @if(old("gender") == "0") checked @endif name="gender"  type="radio" id="female" value="0">
                  <label for="female">Femme</label>
                  @if($errors->has('gender'))
                    <span class="help-block">{{ $errors->first('gender')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="control-group @if($errors->has('picture')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Photo de l'auteur :</label>
              <div class="controls">
                <input class="span11" type="text" placeholder="url de la photo" id="picture" class="form-control" name="picture" value="{{ old('picture') }}">
                @if($errors->has('picture'))
                  <span class="help-block">{{ $errors->first('picture')}}</span>
                @endif
              </div>
            </div>
            <div class="control-group @if($errors->has('city')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Ville :</label>
              <div class="controls">
                <input class="span11" type="text" id="city" name="city" value="{{ old('city') }}">
                @if($errors->has('city'))
                  <span class="help-block">{{ $errors->first('city')}}</span>
                @endif
              </div>
            </div>
            <div class="control-group @if($errors->has('literarymovement')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Catégorie de livre :</label>
              <div class="controls">
                <input class="span11" type="text" id="literarymovement" name="literarymovement" value="{{ old('literarymovement') }}">
                @if($errors->has('literarymovement'))
                  <span class="help-block">{{ $errors->first('literarymovement')}}</span>
                @endif
              </div>
            </div>
            <div class="control-group @if($errors->has('birthday')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Date de naissance :</label>
              <div class="controls">
                <div class="input-append date datepicker">
                  <input  data-date-format="mm-dd-yyyy" class="span11" type="text" id="birthday" name="birthday">
                  <span class="add-on"><i class="icon-th"></i></span> </div>
                  @if($errors->has('birthday'))
                    <span class="help-block">{{ $errors->first('birthday')}}</span>
                  @endif
                </div>
              </div>
              <div class="control-group @if($errors->has('deathday')) has-warning @elseif(count($errors) > 0) has-success @endif">
                <label class="control-label">Date de décès :</label>
                <div class="controls">
                  <div class="input-append date datepicker">
                    <input  data-date-format="mm-dd-yyyy" class="span11" type="text" id="deathday" name="deathday">
                    <span class="add-on"><i class="icon-th"></i></span> </div>
                    @if($errors->has('deathday'))
                      <span class="help-block">{{ $errors->first('deathday')}}</span>
                    @endif
                  </div>
                </div>
                <div class="control-group @if($errors->has('biography')) has-warning @elseif(count($errors) > 0) has-success @endif">
                  <label class="control-label">Message</label>
                  <div class="controls">
                    <textarea class="span11" value="{{ old('biography') }}"></textarea>
                    @if($errors->has('biography'))
                      <span class="help-block">{{ $errors->first('biography')}}</span>
                    @endif
                  </div>
                </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-success">Ajouter</button>
                </div>
              </form>
            </div>
          </div>

        @endsection
