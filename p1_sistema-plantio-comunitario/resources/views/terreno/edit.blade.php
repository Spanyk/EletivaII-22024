<x-app-layout>
<div class="row d-flex justify-content-center">
    <div class="col">
        <h2 class="boorder mb-4">Editar Terreno</h2>
    </div>
    <div class="col-md-12">
        <form action="/terreno/{{$terreno->id)}}" class="form-control" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <input type="text" name="localizacao" id="localizacao" value="{{ $terreno->localizacao }}"class="form-control required">
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