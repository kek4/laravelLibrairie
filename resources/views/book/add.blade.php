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
    <h2><i class="icon-align-justify"></i> Formulaire d'enregistrement de livre</h2>
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
            <div class="control-group @if($errors->has('title')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Titre :</label>
              <div class="controls">
                <input class="span11" type="text" placeholder="Titre du livre" id="title" name="title" value="{{ old('title') }}">
                @if($errors->has('title'))
                   <span class="help-block">{{ $errors->first('title')}}</span>
                @endif
              </div>
            </div>
            <div class="control-group @if($errors->has('author_id')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Auteur :</label>
              <div class="controls">
                <select class="form-control" name="author_id" id="author_id">
                   @foreach($authors as $author)
                      <option value="{{ $author->id }}" @if (old('author_id') == $author->id) selected @endif>{{ $author->name }} {{ $author->firstname }}</option>
                   @endforeach
                </select>
              </div>
            </div>
            <div class="control-group @if($errors->has('price')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Prix en euros:</label>
              <div class="controls">
                <input class="span11" step="any" type="number" id="price" name="price" value="{{ old('price') }}">
                @if($errors->has('price'))
                   <span class="help-block">{{ $errors->first('price')}}</span>
                @endif
              </div>
            </div>
            <div class="control-group @if($errors->has('isbn')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Isbn:</label>
              <div class="controls">
                <input class="span11" type="text" placeholder="'xxxxxxxxxx' ou  'xxx-x-xxxx-xxxx-x' " id="isbn" name="isbn" value="{{ old('isbn') }}">
                @if($errors->has('isbn'))
                   <span class="help-block">{{ $errors->first('isbn')}}</span>
                @endif
              </div>
            </div>
            <div class="control-group @if($errors->has('ean')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Ean:</label>
              <div class="controls">
                <input class="span11" type="text" placeholder="'xxx-xxxxxxxxxx' " id="ean" name="ean" value="{{ old('ean') }}">
                @if($errors->has('ean'))
                   <span class="help-block">{{ $errors->first('ean')}}</span>
                @endif
              </div>
            </div>
            <div class="control-group @if($errors->has('cover')) has-warning @elseif(count($errors) > 0) has-success @endif">
                  <label class="control-label">Photo de la couverture</label>
                  <div class="controls">
                    <input class="span11" type="text" placeholder="url de la couverture" id="cover" class="form-control" name="cover" value="{{ old('cover') }}">
                    @if($errors->has('cover'))
                       <span class="help-block">{{ $errors->first('cover')}}</span>
                    @endif
                  </div>
            </div>
            <div class="control-group @if($errors->has('editor')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Editeur:</label>
              <div class="controls">
                <input class="span11" type="text" id="editor" name="editor" value="{{ old('editor') }}">
                @if($errors->has('editor'))
                   <span class="help-block">{{ $errors->first('editor')}}</span>
                @endif
              </div>
            </div>
            <div class="control-group @if($errors->has('release_date')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Date d'édition :</label>
              <div class="controls">
                <div class="input-append date datepicker">
                  <input  data-date-format="mm-dd-yyyy" class="span11" type="text" id="release_date" name="release_date">
                  <span class="add-on"><i class="icon-th"></i></span> </div>
                @if($errors->has('release_date'))
                   <span class="help-block">{{ $errors->first('release_date')}}</span>
                @endif
              </div>
            </div>
            <div class="control-group @if($errors->has('shop')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Magasin:</label>
              <div class="controls">
                <input class="span11" type="text" id="shop" name="shop" value="{{ old('shop') }}">
                @if($errors->has('shop'))
                  <span class="help-block">{{ $errors->first('shop')}}</span>
                @endif
              </div>
            </div>
            <div class="control-group @if($errors->has('digital')) has-warning @elseif(count($errors) > 0) has-success @endif">
              <label class="control-label">Existe en numérique ? :</label>
              <div class="controls">
                <div class="radio">
                  <input @if(old("digital") == "1") checked @endif name="digital"  type="radio" id="oui" value="1">
                  <label for="oui">Oui</label>
                  <input @if(old("digital") == "0") checked @endif name="digital"  type="radio" id="non" value="0">
                  <label for="non">Non</label>
                    @if($errors->has('digital'))
                       <span class="help-block">{{ $errors->first('digital')}}</span>
                    @endif
                  </div>
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Ajouter</button>
            </div>
          </form>
        </div>
  </div>

@endsection
