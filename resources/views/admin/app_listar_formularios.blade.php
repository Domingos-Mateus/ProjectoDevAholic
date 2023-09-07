@extends('admin.template')

@section('conteudo')


    <table class="table table-striped">
        <thead >
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Tipo de Documento</th>
                <th>Nº do Documento</th>
                <th>Nome da Criança</th>
                <th>Acção</th>
            </tr>
        </thead>

        @foreach ($formularios as $formulario)
            <tr>
                <th><p>{{$formulario->nome_encarregado}}</p></th>
                <th><p>{{$formulario->sobrenome_encarregado}}</p></th>
                <th><p>{{$formulario->tipo_documento}}</p></th>
                <th><p>{{$formulario->numero_documento}}</p></th>
                <th><p>{{$formulario->nome_crianca}}</p></th>
                <th>
                    <a href="/admin/editar_formulario/{{$formulario->id}}"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button></a>
                    <a href="/admin/visualizar_formulario/{{$formulario->id}}"><button class="btn btn-warning btn-sm"><i class="bi bi-eye-fill"></i></button></a>
                    <a href="/admin/eliminar_formulario/{{$formulario->id}}"><button class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i></button></a>
                </th>
            </tr>


            @endforeach


    </table>


@endsection
