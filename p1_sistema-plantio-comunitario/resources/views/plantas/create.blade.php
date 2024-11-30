<x-app-layout>
    <div class="row d-flex justify-content-center ">
        {{-- <div class=" border rounded">
            <img src="{{ asset('imagens/img-horta.jpg')}}" class="img-fluid ">
        </div> --}}
        <h2 class="mx-4 "><i class="fa-solid fa-tree"></i> Cadastrar Plantas <i class="fa-solid fa-tree"></i></h2>
        <div class="col-md-12 mt-2">
            <form action="/planta" class="form-control" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="nome" id="nome" class="form-control required">
                        <label for="nome" class="form-label">Nome </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="tipo" id="tipo" class="form-control">
                        <label for="tipo" class="form-label">Tipo de Planta</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="descricao" id="descricao" class="form-control">
                        <label for="descricao" class="form-label">Descrição</label>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-success mt-4 p-2" type="submit"><i class="fa-solid fa-floppy-disk mx-2"></i> SALVAR</button>
                </div>
            </form>
        </div>
    </div>
    </x-app-layout>