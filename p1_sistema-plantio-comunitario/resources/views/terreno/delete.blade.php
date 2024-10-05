@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <h2 class="boorder mb-4">Editar Terreno</h2>
    </div>
    <div class="col-md-12">
        <form action="{{ route('terreno.destroy', '$terreno->id')}}" class="form-control" method="POST">
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
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibilidade" value="{{ $terreno->dispobibilidade == true }}" id="disponibilidade" value="true"  disabled>
                    <label class="form-check-label" for="true">
                        Disponível
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibilidade" value="{{ $terreno->dispobibilidade == false }}" id="disponibilidade" value="false" disabled>
                    <label class="form-check-label" for="false">
                        Não disponível
                    </label>
                </div>
            </div>
            <p>Deseja realmente Excluir?</p>
            <button class="btn btn-success mt-4" type="submit">Excluir?</button>
        </form>
    </div>
</div>
@endsection