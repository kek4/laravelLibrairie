@extends('layout')
@section('css')
   @parent
   <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />

@endsection
@section('js')
   @parent
   <script src="{{ asset('js/dashboard.js') }}"></script>

@endsection
@section('content')
<!--main-container-part-->
<div id="content">

<div class="bookSession">
   <p>Livres en session</p>
   <div class="row">
      @foreach($bookSession as $book)
         <div class="span1"><img src="{{ $book->cover }}" alt="{{ $book->title }}"> </div>
      @endforeach
   </div>
</div>

</div>

<!--end-main-container-part-->
@endsection
