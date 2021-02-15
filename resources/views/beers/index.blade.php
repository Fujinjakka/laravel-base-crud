@extends('layouts.main')

@section('header')
  <h1>Le mie birre</h1>   
@endsection


@section('content')
  @if(session('message'))
    <div class="alert alert-success">{{session("message")}}</div>  
  @endif
  <table class="table table-dark table-striped table-bordered">
    <thead>
      <tr>
        <th>ID: </th>
        <th>NOME: </th>
        <th>MARCA: </th>
        <th>PREZZO: </th>
        <th>CREATO IL: </th>
        <th>AGGIORNATO IL: </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($beers as $beer)
        <tr>
          <td>{{$beer->id}}</td>
          <td>{{$beer->name}}</td>
          <td>{{$beer->brand}}</td>
          <td>{{$beer->price}}</td>
          <td>{{$beer->created_at}}</td>
          <td>{{$beer->updated_at}}</td>
          <td><a href="{{route("beers.show", ["beer" => $beer->id])}}" class="btn btn-outline-light"><i class="fas fa-eye"></i></a></td>
          <td><a href="{{route("beers.edit", ["beer" => $beer->id])}}" class="btn btn-outline-light"><i class="fas fa-edit"></i></a></td>
          <td>
            <form action="{{route("beers.destroy", $beer->id)}}" method="POST">
              @csrf
              @method("DELETE")
              <button type="submit" class="btn btn-outline-light"><i class="fas fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

@section('footer')
  <div class="text-right">
    <a href="{{route("beers.create")}}" class="btn-primary btn-lg">Inserisci una birra</a>
  </div>
@endsection