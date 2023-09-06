@extends('admin.template')

<style>
    .titulo{
        font-weight: bold;
    }
</style>

    @section('conteudo')




    <div class="jumbotron">
        <center>
            <h1 class="h1"> Detalhes do Encarregado </h1>
        </center>
        <p class="lead"> <span class="titulo"> Nome: </span> {{$formulario->nome_encarregado}} </p>
        <p class="lead"> <span class="titulo"> Sobrenome: </span> {{$formulario->sobrenome_encarregado}} </p>
        <p class="lead"> <span class="titulo"> Email: </span> {{$formulario->email}} </p>
        <p class="lead"> <span class="titulo"> Telefone: </span> {{$formulario->telefone}} </p>
        <p class="lead"> <span class="titulo"> Tipo de Documento: </span> {{$formulario->tipo_documento}} </p>
        <p class="lead"> <span class="titulo"> Nº do Documento: </span> {{$formulario->numero_documento}} </p>
        <hr class="my-4">
    </div>



                <center>
                    <h1 class="h1"> Criança Associada A Este Encarregado </h1>
                </center>

                <table class="table table-striped">
        <thead >
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
            </tr>
        </thead>

            <tr>
                <th><p>{{$formulario->nome_crianca}}</p></th>
                <th><p>{{$formulario->sobrenome_crianca}}</p></th>
                <th><p>{{$formulario->data_nascimento_crianca}}</p></th>
            </tr>




    </table>

    <center>
       <a href="/admin/imprimir_formulario/{{$formulario->id}}"> <button  class="btn btn-primary">Imprimir Formulário</button> </a>
    </center>



    @endsection
