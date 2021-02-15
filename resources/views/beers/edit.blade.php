@extends('layouts.main')

@section('header')
  <h1>Modifica la tua birra preferita</h1>  
@endsection


@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route("beers.update", $beer->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name= "name" id="name" placeholder="Nome" value="{{$beer->name}}">
    </div> 
    <div class="form-group">
      <label for="brand">Marca</label>
      <input type="text" class="form-control" name= "brand" id="brand" placeholder="Marca" value="{{$beer->brand}}">
    </div> 
    <div class="form-group">
      <label for="price">Prezzo</label>
      <input type="text" class="form-control" name= "price" id="price" placeholder="Prezzo" value="{{$beer->price}}">
    </div> 

    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{route("beers.index")}}" class="btn btn-secondary">Indietro</a>
  </form>  
@endsection
