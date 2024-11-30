<x-app-layout>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="d-flex align-items-center mb-2">
                <h2 class="mx-4">Gerenciar Terrenos</h2>
                <div class="btn btn-success mx-2">
                    <a href="/terreno/create" class="navbar-brand"><i class="fa-solid fa-plus"></i></a>
                </div>
                
            </div>
            
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Localização</th>
                            <th>Tamanho</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($terrenos as $terreno)
                            <tr>
                                <td>{{ $terreno->id }}</td>
                                <td>{{ $terreno->localizacao }}</td>
                                <td>{{ $terreno->tamanho }}</td>
                                <td>
                                    <a href="/terreno/{{$terreno->id }}/edit" class="btn btn-sm btn-warning">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="/terreno/{{$terreno->id}}" class="btn btn-sm btn-danger">
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