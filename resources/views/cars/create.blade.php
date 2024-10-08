@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Aggiungi una nuova auto</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('cars.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="" class="control-label">Car name</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm"
                                placeholder="Car name">
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">Brand</label>
                            <input type="text" name="brand" id="" class="form-control form-control-sm"
                                placeholder="Brand">
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">Model</label>
                            <input type="text" name="model" id="" class="form-control form-control-sm"
                                placeholder="Model">
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">Release year</label>
                            <input type="date" name="year" id="" class="form-control form-control-sm"
                                placeholder="Release year">
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">Color</label>
                            <input type="text" name="color" id="" class="form-control form-control-sm"
                                placeholder="Color">
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">Engine</label>
                            <input type="text" name="engine" id="" class="form-control form-control-sm"
                                placeholder="Engine">
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">Horsepower</label>
                            <input type="number" name="horsepower" id="" class="form-control form-control-sm"
                                placeholder="Horsepower">
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">Doors number</label>
                            <input type="number" name="doors" id="" class="form-control form-control-sm"
                                placeholder="Doors number">
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">Km</label>
                            <input type="number" name="km" id="" class="form-control form-control-sm"
                                placeholder="Km">
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">Used</label>
                            <input type="text" name="brand" id="" class="form-control form-control-sm"
                                placeholder="Brand">
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="used" id="">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Usata
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
