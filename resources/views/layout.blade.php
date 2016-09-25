<!DOCTYPE html>
<html lang="fr" ng-app="app">
<head>
  <title>Matrix Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @section('css')
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/matrix-style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/matrix-media.css') }}" />
  <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/jquery.gritter.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  @show
</head>
<body>

  @include('partials/_header')
  @include('partials/_leftside')

  @section('content')

  @show

  @include('partials/_footer')

   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
   <script src="{{ asset('angularJS/AppController.js') }}"></script>
  <script src="{{ asset('js/excanvas.min.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ui.custom.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.flot.min.js') }}"></script>
  <script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>
  <script src="{{ asset('js/jquery.peity.min.js') }}"></script>
  <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('js/matrix.js') }}"></script>
  <script src="{{ asset('js/matrix.dashboard.js') }}"></script>
  <script src="{{ asset('js/jquery.gritter.min.js') }}"></script>
  <script src="{{ asset('js/matrix.interface.js') }}"></script>
  <script src="{{ asset('js/matrix.chat.js') }}"></script>
  <script src="{{ asset('js/jquery.validate.js') }}"></script>
  <script src="{{ asset('js/matrix.form_validation.js') }}"></script>
  <script src="{{ asset('js/jquery.wizard.js') }}"></script>
  <script src="{{ asset('js/jquery.uniform.js') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script src="{{ asset('js/matrix.popover.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/matrix.tables.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  @section('js')
  @show


</body>
</html>
