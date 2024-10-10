@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row bg-giallo py-2 mb-2 rounded">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h2 class="mb-0 text-dark">Lista Concessionarie</h2>
                <a href="{{ route('cars.create') }}" class="btn btn-dark">
                    <i class="fas fa-plus"></i> Aggiungi Nuova Auto
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive-custom">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Concessionarie</th>
                                <th>Telefono</th>
                                <th>Indirizzo</th>
                                <th>Colore</th>
                                <tr>
                        </thead>
                        <tbody>
                            @foreach ($resellers as $reseller)
                                <tr>
                                    <td>{{ $reseller->id }}</td>
                                    <td>{{ $reseller->company }}</td>
                                    <td>{{ $reseller->phone }}</td>
                                    <td>{{ $reseller->address }}</td>
                                  
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href=" "
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href=" "
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action=" " method="POST"
                                                onsubmit="return confirm('Sei sicuro di voler eliminare questa auto?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
