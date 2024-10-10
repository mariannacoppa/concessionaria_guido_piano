@extends('layouts.app')

@section('content')
    <div id="show" class="show-container">
        <div class="show-header">
            <h1 class="text-uppercase">Dettagli Brand: {{ $brand->company }}</h1>
        </div>
        <div class="show-body mt-3">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <p><strong>Nome Azienda:</strong> {{ $brand->company }}</p>
                    <p><strong>Telefono:</strong> {{ $brand->phone }}</p>
                    <p><strong>Indirizzo:</strong> {{ $brand->address }}</p>
                </div>
            </div>
        </div>
        <div class="form-actions mt-4 text-right pr-3 pl-3">
            <a href="{{ route('brands.index') }}" class="btn btn-secondary">Torna alla lista</a>
            <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-warning text-dark">Modifica Brand</a>
        </div>
    </div>
@endsection
