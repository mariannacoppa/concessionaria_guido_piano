@extends('layouts.app')

@section('content')
    <div id="edit" class="edit-container">
        <div class="edit-header">
            <h1 class="text-uppercase">Modifica Brand: {{ $brand->company }}</h1>
        </div>
        <div class="edit-body">
            <form action="{{ route('brands.update', $brand->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="company">Nome Azienda:</label>
                        <input type="text" id="company" name="company" value="{{ old('company', $brand->company) }}"
                            class="form-control @error('company') is-invalid @enderror" required>
                        @error('company')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="phone">Telefono:</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone', $brand->phone) }}"
                            class="form-control @error('phone') is-invalid @enderror" required>
                        @error('phone')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="address">Indirizzo:</label>
                        <input type="text" id="address" name="address" value="{{ old('address', $brand->address) }}"
                            class="form-control @error('address') is-invalid @enderror" required>
                        @error('address')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-actions mt-4 text-right">
                    <button type="submit" class="btn btn-warning text-dark">Aggiorna Brand</button>
                    <a href="{{ route('brands.index') }}" class="btn btn-secondary">Annulla</a>
                </div>
            </form>
        </div>
    </div>
@endsection
