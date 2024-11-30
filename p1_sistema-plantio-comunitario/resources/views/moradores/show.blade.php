<x-app-layout>
    <div class="row d-flex justify-content-center">
        <div class="col">
            <h2 class="boorder mb-4">Excluir Morador</h2>
        </div>
        <div class="col-md-12">
            <form action="/morador/{{$morador->id}}" class="form-control" method="POST">
                @csrf
                @method('DELETE')
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="nome" id="nome" class="form-control required" value="{{$morador->nome}}">
                        <label for="nome" class="form-label">Nome </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="telefone" id="telefone" class="form-control required" value="{{$morador->telefone}}">
                        <label for="telefone" class="form-label">Telefone </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="endereco" id="endereco" class="form-control required" value="{{$morador->endereco}}">
                        <label for="endereco" class="form-label">Endereço </label>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-danger mt-4 p-2" type="submit"><i class="fa-solid fa-trash"></i></button>
                </div>
            </form>
        </div>
    </div>
    </x-app-layout>