@extends('layouts2.app2')
    
    
    @section('conteudo')
    <div class="pt-3" style="display: flex; justify-content: center">
        <div class="col-9 col-md-5 col-lg-4">
        <h5>Dados da criança</h5>

                <input type="text" class="form-control" value="{{$crianca->nome_crianca}}" aria-label="" disabled>
                <input type="text" class="form-control" value="{{$crianca->sobrenome_crianca}}" aria-label="" disabled>
                <input type="text" class="form-control" value="{{$crianca->data_nascimento}}" aria-label="" disabled>
                <input type="text" class="form-control" value="{{$crianca->id_encarregado}}" aria-label="" disabled>
        </div>
    </div>
                @endsection