@extends('layouts.app')

@section('content')

<div class="container">
      <h1 class="text-uppercase">Dettagli Auto: {{ $car->brand }} {{ $car->model }}</h1>

    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th><strong>Marca</strong></th>      
                    <td>{{ $car->brand }}</td>
                </tr>
                <tr>
                    <th><strong>Modello</strong></th>
                    <td>{{ $car->model }}</td>
                </tr>
                <tr>
                    <th><strong>Anno:</strong></th> 
                    <td>{{ $car->year }}</td>
                </tr>
                <tr>
                    <th> <strong>Colore:</strong></th>
                    <td>{{ $car->color }}</td>
                </tr>
                <tr>
                    <th><strong>Usato:</strong></th>
                    <td>{{ $car->used ? 'Sì' : 'No' }}</td>
                </tr>
                <tr>
                    <th>Chilometri</th>
                    <td>{{ $car->km }} km</td>
                </tr>
                <tr>
                    <th>Motore</th>
                    <td>{{ $car->engine}}</td>
                </tr>                 
                <tr>
                    <th>Cavalli</th>
                    <td>{{ $car->horsepower}} cv</td>
                </tr>
                 <tr>
                    <th><strong>PREZZO</strong> </th>
                    <td>{{ number_format($car->price, 2, ',', '.') }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <img src="{{ $car['thumb'] }}" alt="{{ $car['title'] }}" class="img-fluid">
        </div>
    </div>
       <div class="form-actions mt-4 text-right pr-3 pl-3">
            <a href="{{ route('cars.index') }}" class="btn btn-secondary">Torna alla lista</a>
            <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning text-dark">Modifica Auto</a>
        </div>
</div>
 
   
    
 
@endsection






