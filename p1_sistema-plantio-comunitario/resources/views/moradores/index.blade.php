<x-app-layout>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="d-flex align-items-center mb-2">
                <h2 class="mx-4">Gerenciar Moradores</h2>
                <div class="btn btn-success mx-2">
                    <a href="/planta/create" class="navbar-brand"><i class="fa-solid fa-plus"></i></a>
                </div>
                
            </div>
            
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Descricao</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plantas as $planta)
                            <tr>
                                <td>{{ $planta->id }}</td>
                                <td>{{ $planta->nome }}</td>
                                <td>{{ $planta->tipo }}</td>
                                <td>{{ $planta->descricao }}</td>
                                <td>
                                    <a href="/planta/{{$planta->id }}/edit" class="btn btn-sm btn-warning">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="/planta/{{$planta->id}}" class="btn btn-sm btn-danger">
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
</x-app-layout>