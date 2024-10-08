@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>{{ $car->id }}</h2>
            <p>{{ $car->brand }}</p>
            <p>{{ $car->model }}</p>
            <p>{{ $car->year }}</p>
            <p>{{ $car->color }}</p>
            <p>{{ $car->engine }}</p>
            <p>{{ $car->horsepower }}</p>
            <p>{{ $car->doors }}</p>
            <p>{{ $car->km }}</p>
            <p>{{ $car->used }}</p>
        </div>
    </div>
</div>
@endsection