
<x-app-layout>
    <div class="row d-flex justify-content-center p-4">
            <h2 class="boorder mb-4">Excluir Terreno</h2>
        <div class="col-md-12">
            <form action="/terreno/{{$terreno->id}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="nome" id="nome" value="{{ $terreno->nome }}" class="form-control" disabled">
                        <label for="valor1" class="form-label">Nome</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="localizacao" id="localizacao" value="{{ $terreno->localizacao }}"class="form-control" disabled>
                        <label for="localizacao" class="form-label">Localizacao </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="tamanho" id="tamanho" value="{{ $terreno->tamanho }}" class="form-control">
                        <label for="tamanho" class="form-label">Tamanho Terreno </label>
                    </div>
                </div>
        
                <div class="d-grid gap-2">
                    <button class="btn btn-danger mt-4 p-2" type="submit"><i class="fa-solid fa-trash"></i></button>
                </div>
               
            </form>
        </div>
    </div>
    </x-app-layout>