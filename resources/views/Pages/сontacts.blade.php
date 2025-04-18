@extends('layoutTwo')

@section('title', 'Контакты')

@section('content')

<div class="container">
  <div class='row justify-content-center p-3 mt-3'>
    <div class="col-md-7 rounded p-4" style="background-color: rgba(0,0,0, 0.35); backdrop-filter: blur(12px);">
        <h3>Контакты</h1>
      </div>
  </div>

  <div class='d-flex flex-wrap row gap-2 justify-content-center p-3 my-4 blackColor'>
    <div class="col-md-7 rounded p-4 w-auto flex-fill bg-white shadow-sm">
      <h3 class="mb-3">Контактные данные:</h1>
      <p class="mb-1">Телефон: +79818-000-00-00</p>
      <p class="mb-1">Почта: epass@mail.com</p>
    </div>
    <div class="col-md-7 rounded p-4 w-auto flex-fill bg-white shadow-sm">
        <h3>Связаться с нами</h1>
        <form method="GET" action="feedback">
           @csrf
          <div class="py-2 form-group ContactInp">
            <input class="form-control mb-2" name="name" placeholder="Имя">
            <input class="form-control mb-2" name="phone" placeholder="Телефон">
            <input class="form-control mb-2" name="message" placeholder="Обращение">
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn" >OK</button>
          </div>
          @if(session('success'))
            <div class="my-2 alert alert-success">
              {{ session('success') }}
            </div>
          @endif
        </form>
    </div>
  </div>
</div>

@endsection
