@extends('layout')

@section('title', 'Главная')

@section('content')

<div class="container">

	<div class='justify-content-center mt-4 row'>
		<form class="" method="POST" action="route('schedule')">
  			<div class="d-flex align-items-center gap-2 col-12 col-sm-6 col-md-4 col-lg-3">  				
			  <input class="form-control" placeholder="Поиск услуг" name="" >
			  <input class="btn" type="submit" value="Найти" name="" >
  			</div>
		</form>
	</div>
	<div class='justify-content-center mt-4 '>
		<!-- <div class="rounded-4 p-5 bg-dark" > -->
		<div class="rounded-4 p-5 border border-2" style="background: linear-gradient(45deg,rgb(0, 0, 0),rgb(54, 54, 54));">
			<h1 class="fw-bold mb-4">Удобный онлайн-сервис для быстрой записи на СТО</h1>
  			<h3>Запишитесь на техническое<br> обслуживание автомобиля</h3>
  				<div class="mt-5 ">  				
  					<input class="btn fs-5" type="submit" value="Записаться" name="" >
  				</div>
  		</div>
	</div>

	<div class='justify-content-center mb-3 rounded-4'>
		<div class="rounded-4 p-5 blackColor" >
  			<h1 class="pb-3">Популярные услуги</h1>
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 justify-content-center">
      
      			<div class="col">
      			  <div class="card shadow border-0 h-100 text-center">
      			    <img src="images/диагностика.jpg" style="pointer-events: none; user-select: none;" class="card-img-top" alt="Диагностика">
      			    <div class="card-body">
      			      <h5 class="card-title">Диагностика</h5>
      			    </div>
      			  </div>
      			</div>

      			<div class="col">
				  <a href="">
      			  <div class="card shadow border-0 h-100 text-center">
      			    <img src="images/шиномонтаж.jpg" style="pointer-events: none; user-select: none;" class="card-img-top" alt="Шиномонтаж">
      			    <div class="card-body">
      			      <h5 class="card-title">Шиномонтаж</h5>
      			    </div>
      			  </div>
				  </a>
      			</div>

      			<div class="col">
      			  <div class="card shadow border-0 h-100 text-center">
      			    <img src="images/кузовной_ремонт.jpg" style="pointer-events: none; user-select: none;" class="card-img-top" alt="Кузовной ремонт">
      			    <div class="card-body">
      			      <h5 class="card-title">Кузовной ремонт</h5>
      			    </div>
      			  </div>
      			</div>

      			<div class="col">
      			  <div class="card shadow border-0 h-100 text-center">
      			    <img src="images/автосервис.jpg" style="pointer-events: none; user-select: none;" class="card-img-top" alt="Автосервис">
      			    <div class="card-body">
      			      <h5 class="card-title">Автосервис</h5>
      			    </div>
      			  </div>
      			</div>  

			</div>
		</div>
	</div>
</div>

@endsection

