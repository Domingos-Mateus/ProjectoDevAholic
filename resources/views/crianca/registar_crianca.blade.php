@extends('layouts2.app2')
    
    
    @section('conteudo')

    <div class="pt-3" style="display: flex; justify-content: center">
        <div class="col-9 col-md-5 col-lg-4">
        <h5>Preencher os dados da criança</h5>
        <form action="/salvar_crianca" method="POST">
            @csrf
            <div class="form-floating">
            <p>Nome</p><input type="text" name="nome_crianca" class="form-control" placeholder="Nome da criança" required><br>
            <p>Sobrenome</p><input type="text" name="sobrenome_crianca" class="form-control" placeholder="Sobrenome da criança" required><br>
            <input type="date" name="data_nascimento" class="form-control" placeholder="Data de Nascimento" required><br>
            <p>Encarregado</p><select name="id_encarregado" class="form-control">
                @foreach ($encarregados as $encarregado)
                <option value="{{$encarregado->id}}">{{$encarregado->nome_encarregado}}</option><br>
                @endforeach
                
            </select><br>
            
        <br> <button type="submit" class="btn btn-secondary">Salvar</button>
            </div>

        </form>
        </div>
    </div>
@endsection