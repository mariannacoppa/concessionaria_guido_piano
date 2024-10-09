@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="pt-4 d-flex justify-content-between align-items-center">
                    <div>
                        <h2>Cars</h2>
                    </div>
                    <div>
                        <a href="{{ route('cars.create') }}" class="btn btn-sm btn-success">Add New Car</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>BRAND</td>
                            <td>MODEL</td>
                            <td>YEAR</td>
                            <td>COLOR</td>
                            <td>ENGINE</td>
                            <td>HORSEPOWER</td>
                            <td>DOORS</td>
                            <td>KM</td>
                            <td>USED</td>
                            <td>PRICE</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->year }}</td>
                                <td>{{ $car->color }}</td>
                                <td>{{ $car->engine }}</td>
                                <td>{{ $car->horsepower }}</td>
                                <td>{{ $car->doors }}</td>
                                <td>{{ $car->km }}</td>
                                <td>{{ $car->used }}</td>
                                <td>
                                    <div class="d-flex">

                                        <a href="{{ route('cars.show', ['car' => $car->id]) }}"
                                            class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('cars.edit', ['car' => $car->id]) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
