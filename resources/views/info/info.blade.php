@extends('layouts.app')

@section('content')
<style>
    .jumbotron{
        margin-top: 2mm;
    }
</style>

      <script>
         function display() {
            window.print();
         }
      </script>

    <div class="container">
        <button onclick="display()" class="btn btn-lg"><i class="fas fa-print"></i></button>
 
      <ul class="list-group">
        <li class="list-group-item disabled">ФИО</li>
        <li class="list-group-item">{{$student->last_name}} {{$student->name}} {{$student->so_name}}</li>
        <li class="list-group-item disabled">Год рождения</li>
        <li class="list-group-item">{{$student->birthday}}</li>
        <li class="list-group-item disabled">Адрес проживания</li>
        <li class="list-group-item">{{$student->adress}}</li>
      </ul>
<hr>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Вид прививки</th>
            <th scope="col">Возраст</th>
            <th scope="col">Дата</th>
            <th scope="col">Доза</th>
            <th scope="col">Серия</th>
            <th scope="col">Реакция</th>
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
