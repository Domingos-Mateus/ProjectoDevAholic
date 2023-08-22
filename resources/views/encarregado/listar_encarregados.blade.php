@extends('layouts2.app2')
    
    
    @section('conteudo')

    <button class="btn btn-primary"><a href="/encarregado/registar_encarregado"> Cadastrar Novo Encarregado</a></button>
    <table class="table table-striped">
        <thead >
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>cpf</th>
                <th>rg</th>
                <th>Passaporte</th>
                <th>Acção</th>
            </tr>
        </thead>

        @foreach ($encarregados as $encarregado)
            <tr>
                <th><p>{{$encarregado->nome_encarregado}}</p></th>
                <th><p>{{$encarregado->sobrenome_encarregado}}</p></th>
                <th><p>{{$encarregado->email}}</p></th>
                <th><p>{{$encarregado->telefone}}</p></th>
                <th><p>{{$encarregado->cpf}}</p></th>
                <th><p>{{$encarregado->rg}}</p></th>
                <th><p>{{$encarregado->passaporte}}</p></th>
                <th>
                    <button class="btn btn-primary btn-sm"><a href="/encarregado/editar_encarregado/{{$encarregado->id}}">Editar</a></button>
                    <button class="btn btn-warning btn-sm"><a href="/encarregado/visualizar_encarregado/{{$encarregado->id}}">Visualizar</a></button>
                    <button class="btn btn-danger btn-sm"><a href="/eliminar_encarregado/{{$encarregado->id}}">Apagar</a></button>
                </th>
            </tr>
            @endforeach
    </table>
    
    
  @endsection