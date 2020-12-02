@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
@if(session()->has('delete'))
    <div class="alert alert-success">
 {{ session()->get('delete') }}
    </div>
    @endif
</div>
<style>
    .jumbotron {
    background-color:rgb(193, 214, 214); 
    margin-top: 3mm;
}
</style>
<div class="container">
    <a href="{{ route('info.create')}}" class="btn btn-secondary btn-sm"><i class="fas fa-id-card"></i> Добавить карточку</a>
    <div class="jumbotron">
        <form action="{{ url('/search') }}" method="post" role="search">
            @csrf
        <div class="input-group">
            <input type="search" required class="form-control" name="q" placeholder="Поиск"> 
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </span>
        </div>
        </form>
    </div>

        @if(session()->has('success'))
    <div class="alert alert-danger">
        {{ session()->get('success') }}
    </div>
    @endif
</div>
@endsection
