@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <h2 class="boorder mb-4">Novo Terreno</h2>
    </div>
    <div class="col-md-12">
        <form action="{{ route('terreno.store')}}" class="form-control" method="put">
            @csrf
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <input type="text" name="nome" id="nome" class="form-control" required">
                    <label for="nome" class="form-label">Nome</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <input type="text" name="localizacao" id="localizacao" class="form-control required">
                    <label for="localizacao" class="form-label">Localizacao </label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <input type="text" name="tamanho" id="tamanho" class="form-control">
                    <label for="tamanho" class="form-label">Tamanho Terreno </label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibilidade" id="disponibilidade" value="true" checked>
                    <label class="form-check-label" for="true">
                        Disponível
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disponibilidade" id="disponibilidade" value="false">
                    <label class="form-check-label" for="false">
                        Não disponível
                    </label>
                </div>
            </div>
            <button class="btn btn-success mt-4" type="submit">Salvar</button>
        </form>
    </div>
</div>
@endsection