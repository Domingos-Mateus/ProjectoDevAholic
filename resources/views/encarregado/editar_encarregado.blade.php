@extends('layouts2.app2')
    
    
    @section('conteudo')
    <div class="pt-3" style="display: flex; justify-content: center">
        <div class="col-9 col-md-5 col-lg-4">
        <h5>Preencher os dados da criança</h5>

    <form action="/editar_encarregado/update/{{$encarregado->id}}" method="POST">
        @csrf
        <div class="form-floating">
        @method('PUT')
        <!-- Campos do formulário para edição -->
        <input type="text" name="nome_encarregado" class="form-control" value="{{ $encarregado->nome_encarregado }}" required><br>
        <input type="text" name="sobrenome_encarregado" class="form-control" value="{{$encarregado->sobrenome_encarregado}}" required><br>
        <input type="text" name="email" class="form-control" value="{{ $encarregado->email }}" required><br>
        <input type="text" name="telefone" class="form-control" value="{{ $encarregado->telefone }}" required><br>
        <input type="text" name="cpf" class="form-control" value="{{ $encarregado->cpf }}" required><br>
        <input type="text" name="rg" class="form-control" value="{{ $encarregado->rg }}" required><br>
        <input type="text" name="passaporte" class="form-control" value="{{ $encarregado->passaporte }}" required><br>
        <input type="text" name="anexo" class="form-control" value="{{ $encarregado->anexo }}" required><br>
        <!-- Mais campos do formulário -->
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection