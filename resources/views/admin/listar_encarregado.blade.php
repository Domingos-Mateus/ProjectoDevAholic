@extends('admin.template')

@section('conteudo')


    <table class="table table-striped">
        <thead >
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>cpf</th>
                <th>Acção</th>
            </tr>
        </thead>

        @foreach ($encarregados as $encarregado)
            <tr>
                <th><p>{{$encarregado->nome_encarregado}}</p></th>
                <th><p>{{$encarregado->sobrenome_encarregado}}</p></th>
                <th><p>{{$encarregado->email}}</p></th>
                <th><p>{{$encarregado->cpf}}</p></th>
                <th>
                    <a href="/encarregado/editar_encarregado/{{$encarregado->id}}"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button></a>
                    <a href="/encarregado/visualizar_encarregado/{{$encarregado->id}}"><button class="btn btn-warning btn-sm"><i class="bi bi-eye-fill"></i></button></a>
                    <a href="/eliminar_encarregado/{{$encarregado->id}}"><button class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i></button></a>
                </th>
            </tr>

            
            @endforeach

            
    </table>

    {{ $encarregados->links()}}

@endsection
