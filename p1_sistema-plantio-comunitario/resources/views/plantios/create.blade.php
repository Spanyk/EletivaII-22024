<x-app-layout>
    <div class="row d-flex justify-content-center ">
        <h2 class="mx-4 mb-2"><i class="fa-solid fa-tree"></i> Cadastrar Plantio</h2>
        <div class="col-md-12 mt-2">
            <form action="/plantios" class="form-control" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="morador_id" class="form-label">Moradores:</label>
                        <select name="morador_id" class="form-select">
                            @foreach ($moradores as $morador)
                                <option value="{{$morador->id}}">{{$morador->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="planta_id" class="form-label">Plantas :</label>
                        <select name="planta_id" class="form-select">
                            @foreach ($plantas as $planta)
                                <option value="{{$planta->id}}">{{$planta->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <label for="terreno_id" class="form-label">Categoria:</label>
                        <select name="terreno_id" class="form-select">
                            @foreach ($terrenos as $terreno)
                                <option value="{{$terreno->id}}">{{$terreno->localizacao}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="date" name="data_plantio" id="tipo" class="form-control">
                        <label for="data_plantio" class="form-label">Plantado na data</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="date" name="data_colheita" id="tipo" class="form-control">
                        <label for="data_colheita" class="form-label">Data Colheita</label>
                    </div>
                </div>
               
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="status">
                        <label class="form-check-label" for="status">
                            Pode colher?
                        </label>
                      </div>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-success mt-4 p-2" type="submit"><i class="fa-solid fa-floppy-disk mx-2"></i> SALVAR</button>
                </div>
            </form>
        </div>
    </div>
    </x-app-layout>