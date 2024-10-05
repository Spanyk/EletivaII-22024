@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h2 class="boorder mb-4">Detahes do Terreno</h2>
            <p><strong>Nome:</strong>{{ $terreno->nome }}</p>
            <p><strong>Loocalização:</strong>{{ $terreno->localizacao }}</p>
            <p><strong>Tamanho:</strong>{{ $terreno->tamanho }}</p>
            <p><strong>disponibilidade:</strong>{{ $terreno->disponibilidade }}</p>
        </div>
        <a href="{{ route('terreno.index')}}">Voltar</a>
    </div>
@endsection