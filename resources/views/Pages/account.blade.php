@extends('layoutTwo')

@section('title', 'Профиль')

@section('content')

<div class="container">
  <div class='row justify-content-center p-3 mt-1'>
    <div class="col-md-7 rounded p-4" style="background-color: rgba(0,0,0, 0.35); backdrop-filter: blur(12px);">
        <h3>ЛИЧНЫЙ КАБИНЕТ</h1>
        <div class="small d-flex flex-wrap gap-2 justify-content-center mt-5">
          <a href="{{route('account')}}" class="btn ps-2 w-auto flex-fill" style="background-color: white; border: solid white; color: #7E868E" name="">Профиль</a>
          <a href="{{route('notifications')}}" class="btn ps-2 w-auto flex-fill" name="">Уведомления</a>
          <a href="{{route('tickets')}}" class="btn ps-2 w-auto flex-fill" name="">Билеты</a>
        </div>
      </div>
  </div>

  <div class='row justify-content-center p-3 mt-3'>
    <div class="col-md-7 rounded p-4 bg-white text-black shadow">
        <h3 class="pb-3">ФИО: {{$name}}</h1>
        <p>Телефон: {{$phone}}</p>
        <p>Почта: {{$email}}</p>
        <div class="small d-flex justify-content-center mt-5">
          <a class="btn ps-2 redbtn" style="background-color:#FF0000; border: solid #FF0000" href="{{route('exit')}}">Выход</a>
        </div>
      </div>
  </div>

</div

@endsection

