@extends('layouts.app')

@section('content')
<form action="{{ url('create') }}" method="post">
    @csrf
    <div class="container">
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="jumbotron">
    <div class="form-row">
      <div class="form-group col-md-2">
        <label>Фамилия</label>
        <input name="last_name" class="form-control"  required placeholder="Фамилия">
      </div>
      <div class="form-group col-md-2">
        <label>Имя</label>
        <input name="name" class="form-control" required placeholder="Имя">
      </div>
      <div class="form-group col-md-2">
        <label>Отчество</label>
        <input name="so_name" class="form-control" required placeholder="Отчество">
      </div>
      <div class="form-group col-md-2">
        <label>Год рождения</label>
        <input type="date" name="birthday" class="form-control" required placeholder="Год рождения">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Адрес проживания</label>
      <input type="text" class="form-control" name="adress" required placeholder="с.Богдановка, улица Садовая 25">
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
        <label>Вид прививки</label>
        <input type="text" required class="form-control" name="view">
      </div>
      <div class="form-group col-md-1">
        <label>Возраст</label>
        <input type="number" class="form-control" name="age">
      </div>
      <div class="form-group col-md-2">
        <label>Дата</label>
        <input type="date" class="form-control" name="date">
      </div>
      <div class="form-group col-md-1">
        <label>Доза</label>
        <input type="number" class="form-control" name="doza">
      </div>
      <div class="form-group col-md-1">
        <label>Серия</label>
        <input type="text" class="form-control" name="seria">
      </div>
      <div class="form-group col-md-2">
        <label>Реакция</label>
        <input type="text" class="form-control" name="reakcia">
      </div>
      <div class="form-group col-md-2">
        <label>Противопоказания</label>
        <input type="text" class="form-control" name="info">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</div>
</div>
  </form>
@endsection
