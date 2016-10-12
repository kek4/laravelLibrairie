@extends('layout')
@section('css')
   @parent
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css" />
   <link rel="stylesheet" href="{{ asset('css/list.css') }}" />

@endsection
@section('js')
   @parent
   <script src="{{ asset('angularJS/AuthorController.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
   @if(Session::has('success'))
      <script>
      toastr.success("{{ Session::get('success') }}", "Bravo !");
      $("[name='my-checkbox']").bootstrapSwitch();
      </script>
@endif
@endsection
@section('content')
<div id="content" ng-controller="BookController">
   <!--main-container-part-->
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-5">
            <img src="{{ $book->cover }}" alt="{{ $book->title }}" />
         </div>
         <div class="col-md-7">
            <h1>{{ $book->title }}</h1>
            <p>
               <span>Ecrit par <a href=""> {{ $name }} {{ $firstname }} </a>{{ $book->name }} {{ $book->firstname }}</span>
               <span>Edition : {{ $book->editor }}"</span>
               <span>sortie le : {{ $book->release_date }}"</span>
               <span>Catégorie : {{ $book->category }}"</span>
            </p>
            <br>
            <a href="#">{{ $book->price }}€ | Ajouter au panier</a>
         </div>
      </div>
   </div>
</div>

<!--end-main-container-part-->
@endsection
