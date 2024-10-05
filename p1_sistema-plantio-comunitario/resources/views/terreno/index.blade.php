@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Terrenos Cadastrados</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Localização</th>
                            <th>Tamanho</th>
                            <th>Disponibilidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($terrenos as $terreno)
                            <tr>
                                <td>{{ $terreno->id }}</td>
                                <td>{{ $terreno->nome }}</td>
                                <td>{{ $terreno->localizacao }}</td>
                                <td>{{ $terreno->tamanho }}</td>
                                <td>{{ $terreno->dispobibilidade }}</td>
                                <td>
                                    <a href="{{ route('terreno.show', $terreno->id) }}" class="btn btn-sm btn-info">
                                        <i class="fa-solid fa-eye"></i> 
                                    </a>
                                    <a href="{{ route('terreno.edit', $terreno->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="{{ route('terreno.delete', $terreno->id) }}" class="btn btn-sm btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection