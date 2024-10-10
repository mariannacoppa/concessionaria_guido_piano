@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="m-2">{{ $car->brand }} {{ $car->model }} {{ $car->trim }}</h1>
    
    <hr>

    <div class="row">
        <div class="col-md-6">
            <p><strong>Marca:</strong> {{ $car->brand }}</p>
            <p><strong>Modello:</strong> {{ $car->model }}</p>
            <p><strong>Anno:</strong> {{ $car->year }}</p>
            <p><strong>Colore:</strong> {{ $car->color }}</p>
            <p><strong>Chilometri:</strong> {{ number_format($car->km, 0, ',', '.') }} km</p>
            <p><strong>Prezzo (€):</strong> {{ number_format($car->price, 2, ',', '.') }}</p>
            <p><strong>Motore:</strong> {{ $car->engine }}</p>
            <p><strong>Cavalli (HP):</strong> {{ $car->horsepower }}</p>
            <p><strong>Porte:</strong> {{ $car->doors }}</p>
            <p><strong>Usato:</strong> {{ $car->used ? 'Sì' : 'No' }}</p>        
            <p><strong>Posti:</strong> {{ $car->seats }}</p>
        </div>
        <div class="col-md-6">
            <img src="{{ $car->image_url }}" alt="{{ $car->brand }} {{ $car->model }}" class="img-fluid">
        </div>
        
        <div class="form-actions mt-4 text-right pr-3 pl-3">
            <a href="{{ route('cars.index') }}" class="btn btn-secondary">Torna alla lista</a>
            <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning text-dark">Modifica Auto</a>
        </div>
    </div>
</div>
@endsection


        
 
 
   
    
 
 






