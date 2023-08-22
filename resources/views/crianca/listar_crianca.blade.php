@extends('layouts2.app2')
    
    
    @section('conteudo')
   <button class="btn btn-info"> <a href="/crianca/registar_crianca"> Cadastrar Nova criança</a></button>
   
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome da Criança</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
                <th>Encarregado</th>
                <th>Acção</th>
            </tr>
        </thead>

        @foreach ($crianca as $crianca)
            <tr>
                <th><p>{{$crianca->nome_crianca}}</p></th>
                <th><p>{{$crianca->sobrenome_crianca}}</p></th>
                <th><p>{{$crianca->data_nascimento}}</p></th>
                <th>
                    <p>{{$crianca->nome_encarregado}}</p>
                </th>
                
                <th>
                    <button class="btn btn-primary btn-sm"><a href="/crianca/editar_crianca/{{$crianca->id}}">Editar</a></button>
                    <button class="btn btn-warning btn-sm"><a href="/crianca/visualizar_crianca/{{$crianca->id}}">Visualizar</a></button>
                    <button class="btn btn-danger btn-sm"><a href="/eliminar_crianca/{{$crianca->id}}">Apagar</a></button>
                </th>
            </tr>
            @endforeach
    </table>
    
    
    @endsection