@extends('layouts2.app2')
    
    
    @section('conteudo')

    <br><br>
    <a href="/crianca/registar_crianca"><button class="btn btn-info btn-lg">  <i class="bi bi-person-plus-fill"></i></button></a>
    <br><br>
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
                    <a href="/crianca/editar_crianca/{{$crianca->id}}"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button></a>
                    <a href="/crianca/visualizar_crianca/{{$crianca->id}}"><button class="btn btn-warning btn-sm"><i class="bi bi-eye-fill"></i></button></a>
                    <a href="/eliminar_crianca/{{$crianca->id}}"><button class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i></button></a>
                </th>
            </tr>
            @endforeach
    </table>
    
    
    @endsection