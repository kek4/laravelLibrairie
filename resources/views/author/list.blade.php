@extends('layout')
@section('css')
   @parent

@endsection
@section('js')
   @parent
   <script src="{{ asset('angularJS/AuthorController.js') }}"></script>
@endsection
@section('content')
<!--main-container-part-->
<div id="content" ng-controller="AuthorController">

#{ test }#

<div ng-repeat="author in listAuthor">
  #{ author.name }#
</div>


</div>

<!--end-main-container-part-->
@endsection
