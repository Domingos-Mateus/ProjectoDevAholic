@extends('layouts2.app2')
    
    
    @section('conteudo')


    <div class="pt-3" style="display: flex; justify-content: center">
        <div class="col-9 col-md-5 col-lg-4">
        <h5>Editar os dados da criança</h5>
    <form action="/editar_crianca/update/{{$crianca->id}}" method="POST">
        @csrf

        @method('PUT')
        <div class="form-floating">
        <!-- Campos do formulário para edição -->
        <p>Nome</p><input type="text" name="nome_crianca" class="form-control" value="{{ $crianca->nome_crianca }}" required><br>
        <p>Sobrenome</p><input type="text" name="sobrenome_crianca" class="form-control" value="{{$crianca->sobrenome_crianca}}" required><br>
        <p>Data de Nascimento</p><input type="text" name="data_nascimento" class="form-control" value="{{ $crianca->data_nascimento }}" required><br>
        <p>Encarregado</p><input type="text" name="id_encarregado" class="form-control" value="{{ $crianca->id_encarregado }}"><br>
        
        <!-- Mais campos do formulário -->
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
        </div>
    </div>
@endsection