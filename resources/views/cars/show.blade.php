@extends('layouts.app')

@section('content')
    <div id="show-cars" class="show-car-container">
        <div class="show-car-header">
            <h1 class="text-uppercase">Dettagli Auto: {{ $car->brand }} {{ $car->model }}</h1>
        </div>
        <div class="show-car-body mt-3">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <p><strong>Marca:</strong> {{ $car->brand }}</p>
                    <p><strong>Modello:</strong> {{ $car->model }}</p>
                    <p><strong>Anno:</strong> {{ $car->year }}</p>
                    <p><strong>Colore:</strong> {{ $car->color }}</p>
                    <p><strong>Chilometri:</strong> {{ $car->km }} km</p>
                </div>
                <div class="form-group col-md-6">
                    <p><strong>Prezzo (€):</strong> {{ number_format($car->price, 2, ',', '.') }}</p>
                    <p><strong>Motore:</strong> {{ $car->engine }}</p>
                    <p><strong>Cavalli (HP):</strong> {{ $car->horsepower }}</p>
                    <p><strong>Porte:</strong> {{ $car->doors }}</p>
                    <p><strong>Usato:</strong> {{ $car->used ? 'Sì' : 'No' }}</p>
                </div>
            </div>
        </div>
        <div class="form-actions mt-4 text-right pr-3 pl-3">
            <a href="{{ route('cars.index') }}" class="btn btn-secondary">Torna alla lista</a>
            <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning text-dark">Modifica Auto</a>
        </div>
</div>
 
   
    
 
@endsection






