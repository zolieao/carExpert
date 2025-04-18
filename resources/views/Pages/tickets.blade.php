@extends('layoutTwo')

@section('title', 'Билеты')

@section('content')

<div class="container">
  <div class='row justify-content-center p-3 mt-1'>
    <div class="col-md-7 rounded p-4" style="background-color: rgba(0,0,0, 0.35); backdrop-filter: blur(12px);">
        <h3>ЛИЧНЫЙ КАБИНЕТ</h1>
        <div class="small d-flex flex-wrap gap-2 justify-content-center mt-5">
          <a href="{{route('account')}}" class="btn ps-2 w-auto flex-fill">Профиль</a>
          <a href="{{route('notifications')}}" class="btn ps-2 w-auto flex-fill" >Уведомления</a>
          <a href="{{route('tickets')}}" class="btn ps-2 w-auto flex-fill" style="background-color: white; border: solid white; color: #7E868E" >Билеты</a>
        </div>
      </div>
  </div>

  <div class='row justify-content-center p-3 mt-1'>

    <div class="col-md-7 justify-content-center blackColor rounded p-3 my-2 bg-white shadow d-flex align-items-center smallTxt">
      <div class="m-0 w-15 flex-fill">
        <h3 class="m-0 ">Анапа-Краснодар</h3>
      </div>
      <div class="m-0 w-15 flex-fill">
        <h3 class="m-0 "></h3>
      </div>
      <div class="m-0 w-15 flex-fill">
        <h3 class="m-0 "></h3>
      </div>
    </div>


  </div>

</div

@endsection

