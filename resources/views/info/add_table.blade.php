@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('info.add_table', $student)}}" method="post">
    @method('POST')
    @csrf
    
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
      <input type="text" class="form-control" name="seria" >
    </div>
    <div class="form-group col-md-2">
      <label>Реакция</label>
      <input type="text" required class="form-control" name="reakcia" >
    </div>
    <div class="form-group col-md-2">
      <label>Противопоказания</label>
      <input type="text" required class="form-control" name="info" >
    </div>
    <div class="form-group col-md-1">
      <label>Сохранить</label>
      <button type="submit" class="btn btn-success btn-md"><i class="far fa-save"></i></button>
    </div>
    
</div>
</form>

</div>
@endsection