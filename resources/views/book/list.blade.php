@extends('layout')
@section('css')
   @parent
   <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css') }}" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/css/mdb.min.css" />
   <link rel="stylesheet" href="{{ asset('css/list.css') }}" />

@endsection
@section('js')
   @parent
   <script src="{{ asset('angularJS/BookController.js') }}"></script>
   <script src="{{ asset('bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/js/mdb.min.js"></script>
   @if(Session::has('success'))
      <script>
      toastr.success("{{ Session::get('success') }}", "Bravo !");
      </script>
@endif
@endsection
@section('content')
<!--main-container-part-->
<div id="content" ng-controller="BookController">

  <input type="checkbox" ng-model="checked" aria-label="Toggle ngHide">

<div ng-show="checked">
  <div class="row">
    <div class="col-xs-4" ng-repeat="book in listBook" >
        <div class="card">
          <img class="img-fluid" src="#{ book.cover }#" alt="#{ book.title }#">
          <div class"card-block">
            <h4 class="card-title">#{ book.title }#</h4>
            <p class="card-text">#{ book.author_id }#</p>
            <p class="card-text">#{ book.price }#€</p>
          </div>
        </div>
    </div>
  </div>
</div>

<div class="col-xs-12" ng-hide="checked">
      <table class='table table-hover'>
         <thead>
            <tr class="success">
              <th>Liste des livres du catalogue</th>
               <th>Titre</th>
               <th>Prix</th>
               <th>Auteur</th>
               <th>Editeur</th>
               <th>Date d'édition</th>
               <th>Isbn</th>
               <th>Ean</th>
               <th>Nombre de vue</th>
               <th>Dispo en numérique</th>
               <th>Supprimer</th>
            </tr>
         </thead>
         <tbody>
               <tr ng-repeat="book in listBook" class="listTable">
                  <td><img src="#{ book.cover }#" alt="#{ book.title }#" class="img-rounded class="img-responsive""/></td>
                  <td>#{ book.title }#</td>
                  <td>#{ book.price }#€</td>
                  <td>#{ book.editor }#</td>
                  <td>#{ book.author_id }#</td>
                  <td>#{ book.release_date }#</td>
                  <td>#{ book.isbn }#}</td>
                  <td>#{ book.ean }#</td>
                  <td>#{ book.view }#</td>
                  <td>#{ book.digital }#</td>
                  <td>supp?</td>
               </tr>
         </tbody>
      </table>
</div>


</div>

<!--end-main-container-part-->
@endsection
