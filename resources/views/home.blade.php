@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Compagnia</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">Stazione d'arrivo</th>
                        <th scope="col">Orario di partenza</th>
                        <th scope="col">Orario d'arrivo</th>
                        <th scope="col">Codice del treno</th>
                        <th scope="col">Numero di carrozze</th>
                        <th scope="col">Treno in orario</th>
                        <th scope="col">Treno cancellato</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                      <tr>
                            <td>{{$train['agency']}}</td>
                            <td>{{$train['departure_station']}}</td>
                            <td>{{$train['arrival_station']}}</td>
                            <td>{{$train['departure_time']}}</td>
                            <td>{{$train['arrival_time']}}</td>
                            <td>{{$train['train_code']}}</td>
                            <td>{{$train['number_of_carriages']}}</td>
                            <td>{{($train['in_time'] == 1 ? "Si" : "No") }}</td>
                            <td>{{($train['deleted'] == 1 ? "Si" : "No")}}</td>    
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    
@endsection