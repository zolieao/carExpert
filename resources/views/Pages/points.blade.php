@extends('layoutTwo')

@section('title', 'Точки продаж')

@section('content')

<div class="container">
  <div class='row justify-content-center p-3 mt-3'>
    <div class="col-md-7 rounded p-4" style="background-color: rgba(0,0,0, 0.35); backdrop-filter: blur(12px);">
        <h3>Точки продаж</h1>
      </div>
  </div>

  <div class='justify-content-center p-2 my-4 blackColor'>

  @foreach ($points as $point)
    <div class="rounded p-3 my-2 bg-white shadow d-flex align-items-center smallTxt">
      <h5 class="m-0 w-25">{{$point->city}}</h5>
      <p></p>
      <div class="w-auto flex-fill">
        <p class="m-0">{{$point->address}}</p>
        <p class="m-0">{{$point->time}}</p>
      </div>
      <p class="m-0 w-auto" style="color:#7E868E;">Маршрут</p>
    </div>
    @endforeach


  </div>
</div>

@endsection

