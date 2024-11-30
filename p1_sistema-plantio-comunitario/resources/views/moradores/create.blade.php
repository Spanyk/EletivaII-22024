<x-app-layout>
    <div class="row d-flex justify-content-center ">
        {{-- <div class=" border rounded">
            <img src="{{ asset('imagens/img-horta.jpg')}}" class="img-fluid ">
        </div> --}}
        <h2 class="mx-4 "><i class="fa-solid fa-tree"></i> Cadastrar Morador <i class="fa-solid fa-tree"></i></h2>
        <div class="col-md-12 mt-2">
            <form action="/morador" class="form-control" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <label for="user_id" class="form-label">Usuarios:</label>
                <select name="user_id" class="form-select">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                        <input type="text" name="endereco" id="endereco" class="form-control required">
                        <label for="endereco" class="form-label">Endereço </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="endereco" id="endereco" class="form-control required">
                        <label for="endereco" class="form-label">Endereço </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" name="tamanho" id="telefone" class="form-control">
                        <label for="telefone" class="form-label">Número de Telefone </label>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-success mt-4 p-2" type="submit"><i class="fa-solid fa-floppy-disk mx-2"></i> SALVAR</button>
                </div>
            </form>
        </div>
    </div>
    </x-app-layout>