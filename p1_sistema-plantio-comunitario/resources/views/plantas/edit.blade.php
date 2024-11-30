<x-app-layout>
    <div class="row d-flex justify-content-center">
        <div class="col">
            <h2 class="boorder mb-4">Editar Planta</h2>
        </div>
        <div class="col-md-12">
            <form action="/planta/{{$planta->id}}" class="form-control" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="nome" id="nome" class="form-control required" value="{{$planta->nome}}">
                        <label for="nome" class="form-label">Nome </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="tipo" id="tipo" class="form-control" value="{{$planta->tipo}}">
                        <label for="tipo" class="form-label">Tipo de Planta</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        
                        <input type="text" name="descricao" id="descricao" class="form-control" value={{$planta->descricao}}>
                        <label for="descricao" class="form-label">Descrição</label>
                        
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-success mt-4 p-2" type="submit"><i class="fa-solid fa-floppy-disk"></i></button>
                </div>
            </form>
        </div>
    </div>
    </x-app-layout>