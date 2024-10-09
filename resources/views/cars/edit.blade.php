@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Car: {{ $car->brand }} {{ $car->model }}</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cars.edit', $car->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $car->brand) }}" required>
            </div>

            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ old('model', $car->model) }}" required>
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ old('year', $car->year) }}" required>
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" id="color" name="color" value="{{ old('color', $car->color) }}" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $car->price) }}" required>
            </div>

            <div class="form-group">
                <label for="engine">Engine:</label>
                <input type="text" class="form-control" id="engine" name="engine" value="{{ old('engine', $car->engine) }}" required>
            </div>

            <div class="form-group">
                <label for="horsepower">Horsepower:</label>
                <input type="number" class="form-control" id="horsepower" name="horsepower" value="{{ old('horsepower', $car->horsepower) }}" required>
            </div>

            <div class="form-group">
                <label for="doors">Doors:</label>
                <input type="number" class="form-control" id="doors" name="doors" value="{{ old('doors', $car->doors) }}" required>
            </div>

            <div class="form-group">
                <label for="km">Kilometers:</label>
                <input type="number" class="form-control" id="km" name="km" value="{{ old('km', $car->km) }}" required>
            </div>

            <div class="form-group">
                <label for="used">Used:</label>
                <select class="form-control" id="used" name="used" required>
                    <option value="1" {{ old('used', $car->used) == 1 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('used', $car->used) == 0 ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Car</button>
            <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
