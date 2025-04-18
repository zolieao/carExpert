@extends('layout')

@section('title', 'Расписание')

@section('content')

<div class="container min-vh-100">
	<div class='row justify-content-center p-3 mt-5'>
		<div class="col-md-7 rounded p-4" style="background-color: rgba(0,0,0, 0.35); backdrop-filter: blur(12px);">
  			<h3>РАСПИСАНИЕ АВТОБУСОВ</h1>
  			<p>Билеты на междугородние рейсы</p>
  			<form class="small d-flex flex-wrap gap-2 justify-content-center mt-5">
  				<input class="input-field form-control rounded ps-2 w-auto flex-fill" name="" placeholder="Анапа">
  				<input class="input-field form-control rounded ps-2 w-auto flex-fill" name="" placeholder="Краснодар">
  				<input class="input-field form-control rounded ps-2 w-auto flex-fill" type="date" name="">
	  		</form>
  		</div>
	</div>
</div>


@if($trips->isEmpty())
        <p>Рейсов по вашему запросу не найдено.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Рейс</th>
                    <th>Отправление</th>
                    <th>Прибытие</th>
                    <th>Платформа</th>
                    <th>Тип автобуса</th>
                    <th>Детали</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trips as $trip)
                <tr>
                    <td>{{ $trip->id }}</td>
                    <td>{{ date('H:i', strtotime($trip->departure_time)) }}</td>
                    <td>{{ date('H:i', strtotime($trip->arrival_time)) }}</td>
                    <td>{{ $trip->platform }}</td>
                    <td>{{ $trip->bus_type == 'soft' ? 'Мягкий' : 'Жесткий' }}</td>
                    <td><a href="{{ url('/trip/'.$trip->id) }}" class="btn btn-primary">Подробнее</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

