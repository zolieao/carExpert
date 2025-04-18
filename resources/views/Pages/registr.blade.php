@extends('layout')

@section('title', 'Главная')

@section('content')

<div class="container pt-5">
    <div class="row justify-content-center p-3 mt-5">
      <div class="col-md-6 rounded p-4" style="background-color: rgba(0,0,0, 0.5); backdrop-filter: blur(12px);">
        <h2 class="mb-3">Регистрация</h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{route('register')}}">
           @csrf
           <div class="py-2 form-group">
            <input class="form-control" name="full_name" placeholder="ФИО">
          </div>
          <div class="py-2 form-group">
            <input type="email" class="form-control" name="email" placeholder="Почта">
          </div>
          <div class="py-2 form-group">
            <input class="form-control" name="phone" placeholder="Телефон">
          </div>
          <div class="py-2 form-group">
            <input type="password" class="form-control" name="password" placeholder="Пароль">
          </div>
          <div class="py-2 form-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль">
          </div>
          <div class="pt-2 form-group">
            <p style="font-size: 0.8em;" class="fw-light">Регистрируясь, пользователь дает согласие<br> на обработку персональных данных </p>
          </div>
          <div class="pb-2 form-group">
            <a style="color: white;" class="fw-light" href="{{route('log')}}">Вход</a>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn" >Зарегистрироваться</button>
          </div>       
        </form>
      </div>
    </div>

</div>

@endsection

