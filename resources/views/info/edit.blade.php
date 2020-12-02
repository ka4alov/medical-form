@extends('layouts.app')

@section('content')

<style>
    .jumbotron{
        margin-top: 2mm;
    }
</style>

<form action="{{ route('info.update', $student->id) }}" method="POST">
   @csrf
    @method('PUT');
    <div class="container">
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
        <a href="{{route('content')}}" type="button" class="btn btn-primary btn-sm"><i class="fas fa-arrow-circle-left" ></i> На главную</a>
        <button type="submit" class="btn btn-success btn-sm"><i class="far fa-save"></i></button>
    <div class="jumbotron">
    <div class="form-row">
       
      <div class="form-group col-md-2">
          
        <label>Фамилия</label>
        <input name="last_name" class="form-control"  value="{{ $student->last_name }}">
      </div>
      <div class="form-group col-md-2">
        <label>Имя</label>
        <input name="name" class="form-control" value="{{ $student->name}}">
      </div>
      <div class="form-group col-md-2">
        <label>Отчество</label>
        <input name="so_name" class="form-control" value="{{ $student->so_name}}">
      </div>
      <div class="form-group col-md-2">
        <label>Год рождения</label>
        <input name="birthday" class="form-control" value="{{ $student->birthday}}">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Адрес проживания</label>
      <input type="text" class="form-control" name="adress" value="{{ $student->adress }}">
    </div>
    
</div>

</div>
</form>


<!-- Table -->
<div class="container">
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Вид прививки</th>
        <th scope="col">Возраст</th>
        <th scope="col">Дата</th>
        <th scope="col">Доза</th>
        <th scope="col">Серия</th>
        <th scope="col">Реакция</th>
        <label for=""><a href="{{route('info.add_table', $student)}}" type="button" class="btn btn-primary btn-sm"><i class="far fa-plus"></i></a></label>
        <th scope="col">Противопоказания</th>
     </tr>
    </thead>
    <tbody>
        @if ($student->info->count() > 0)
            
                
        @foreach ($student->info as $studen)
            <tr>
                
               
               <td scope="row">{{ $studen->view }}</td>
               <td scope="row">{{ $studen->age }}</td>
               <td scope="row">{{ $studen->date }}</td>
               <td scope="row">{{ $studen->doza }}</td>
               <td scope="row">{{ $studen->seria }}</td>
               <td scope="row">{{ $studen->reakcia }}</td>
               <td scope="row">{{ $studen->info }}</td>
               
            </tr> 
            @endforeach
        @else
        <tr>
            <th scope="row">0</th>
            <td scope="row">Пусто</td>
            <td scope="row">Пусто</td>
            <td scope="row">Пусто</td>
            <td scope="row">Пусто</td>
            <td scope="row">Пусто</td>
            <td scope="row">Пусто</td>
            <td scope="row">Пусто</td>
            
        </tr> 
        
        @endif
        </tbody>
  </table>
</div>
@endsection