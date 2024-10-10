@extends('layouts.app')

@section('content')
    <div id="show" class="show-container">
        <div class="show-header">
            <h1 class="text-uppercase">Dettagli Optional: {{ $optional->name }}</h1>
        </div>
        <div class="show-body mt-3">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <p><strong>Nome:</strong> {{ $optional->name }}</p>
                    <p><strong>Descrizione:</strong> {{ $optional->description }}</p>
                </div>
                <div class="form-group col-md-6">
                    <p><strong>Prezzo (€):</strong> {{ number_format($optional->price, 2, ',', '.') }}</p>
                </div>
            </div>
        </div>
        <div class="form-actions mt-4 text-right pr-3 pl-3">
            <a href="{{ route('optionals.index') }}" class="btn btn-secondary">Torna alla lista</a>
            <a href="{{ route('optionals.edit', $optional->id) }}" class="btn btn-warning text-dark">Modifica Optional</a>
        </div>
    </div>
@endsection
