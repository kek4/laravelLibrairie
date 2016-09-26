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
<!--main-container-part-->
<div id="content" ng-controller="AuthorController">

  <input type="checkbox" ng-model="checked" name='my-checkbox' aria-label="Toggle ngHide">

   <div ng-show="checked">
     <div class="row">
       <div class="col-xs-4" ng-repeat="author in listAuthor" >
             <img class="img-fluid" src="#{ author.cover }#" alt="#{ author.name }#">
               <h4>#{ author.name }#</h4>
               <p>#{ author.firstname }#</p>>
       </div>
     </div>
   </div>

   <div class="col-xs-12" ng-hide="checked">
         <table class='table table-hover'>
            <thead>
               <tr class="success">
                 <th>Liste des auteurs</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Ville</th>
                  <th>Catégorie de livre</th>
                  <th>Date de naissance</th>
                  <th>Date de mort</th>
                  <th>Supprimer</th>
               </tr>
            </thead>
            <tbody>
                  <tr ng-repeat="author in listAuthor" class="listTable">
                     <td><img src="#{ author.picture }#" alt="#{ author.name }#" class="img-responsive"/></td>
                     <td>#{ author.name }#</td>
                     <td>#{ author.firstname }#</td>
                     <td>#{ author.city }#</td>
                     <td>#{ author.category }#</td>
                     <td>#{ author.birthday }#</td>
                     <td>
                        <span ng-show="#{ book.deathday }#">#{ book.deathday }#</span>
                        <span ng-hide="#{ book.deathday }#"> Toujours vivant </span>
                     </td>
                     <td><a ng-click="deleteAuthor(author.id)"><i class="fa fa-trash-o fa-3x" aria-hidden="true"></i></a></td>
                  </tr>
            </tbody>
         </table>
   </div>


</div>

<!--end-main-container-part-->
@endsection
