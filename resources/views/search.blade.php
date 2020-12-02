@extends('layouts.app')

@section('content')



<div class="container" >
<div class="row">
<div class="col-12">
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ФИО</th>
        <th scope="col">Действия</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach ($students as $student)
        <tr class="table-success">
            <th scope="row">{{ $student->id }}</th>
            <td><h5>{{ $student->last_name }} {{ $student->name }} {{ $student->so_name }} {{ $student->birthday}}</h5></td>
            <td>
        <form action="{{route('delete', $student)}}" method="POST">
            <a href="{{route('info.info', $student->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
            <a href="{{route('info.edit', $student->id) }}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
            @method('delete')
            @csrf
        </form>
           </td>
        </tr>
        @endforeach
    </tbody>
   </table>
</div>
</div>
</div>
@endsection
