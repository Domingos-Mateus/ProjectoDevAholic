@extends('layouts2.app2')
    
    
    @section('conteudo')

    <form action="/editar_encarregado/update/{{$encarregado->id}}" method="POST">
        @csrf
        @method('PUT')
        <!-- Campos do formulário para edição -->
        <input type="text" name="nome_encarregado" value="{{ $encarregado->nome_encarregado }}" required><br>
        <input type="text" name="sobrenome_encarregado" value="{{$encarregado->sobrenome_encarregado}}" required><br>
        <input type="text" name="email" value="{{ $encarregado->email }}" required><br>
        <input type="text" name="telefone" value="{{ $encarregado->telefone }}" required><br>
        <input type="text" name="cpf" value="{{ $encarregado->cpf }}" required><br>
        <input type="text" name="rg" value="{{ $encarregado->rg }}" required><br>
        <input type="text" name="passaporte" value="{{ $encarregado->passaporte }}" required><br>
        <input type="text" name="anexo" value="{{ $encarregado->anexo }}" required><br>
        <!-- Mais campos do formulário -->
        <button type="submit">Editar</button>
    </form>
@endsection