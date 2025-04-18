@extends('layout')

@section('title', 'Главная')

@section('content')

<div class="container pt-5">
    <div class="row justify-content-center p-3 mt-5">
      <div class="col-md-6 rounded p-4" style="background-color: rgba(0,0,0, 0.5); backdrop-filter: blur(12px);">
        <h2 class="mb-3">Авторизация</h2>

        <form method="POST" action="login">
           @csrf
          <div class="py-2 form-group">
            <input type="text" class="form-control" name="email" placeholder="Почта">
          </div>
          <div class="py-2 form-group">
            <input type="password" class="form-control" name="password" placeholder="Пароль">
          </div>
          <div class="pb-2 form-group">
            <a style="color: white;" class="fw-light" href="{{route('reg')}}">Регистрация</a>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn" >Вход</button>
          </div>       
        </form>
      </div>
    </div>

</div>

@endsection

