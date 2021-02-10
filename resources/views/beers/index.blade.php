<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset("css/app.css")}}">

        <title>Laravel</title>

        
    </head>
    <body>
      <main class="container">
        <h1>Le mie birre</h1>

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
                <td>{{$beer->prize}}</td>
                <td>{{$beer->created_at}}</td>
                <td>{{$beer->updated_at}}</td>
              </tr>
                
            @endforeach
          </tbody>
        </table>
      </main>
        
    </body>
</html>
