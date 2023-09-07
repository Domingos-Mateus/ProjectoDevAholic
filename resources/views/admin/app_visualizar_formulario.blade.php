@extends('admin.template')

<style>
    .titulo{
        font-weight: bold;
    }
    img.card-img-top{
        max-height: 500px;
    }
</style>

    @section('conteudo')


    <div class="card mb-3">
        <img class="card-img-top" src="{{$formulario->caminho_anexo}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"> <span class="titulo"> Nome: </span> {{$formulario->nome_encarregado}}</h5>
            <h5 class="card-title"> <span class="titulo"> Sobrenome: </span> {{$formulario->sobrenome_encarregado}}</h5>
            <h5 class="card-title"> <span class="titulo"> Email: </span> {{$formulario->email}}</h5>
            <h5 class="card-title"> <span class="titulo"> Telefone: </span> {{$formulario->telefone}}</h5>
            <h5 class="card-title"> <span class="titulo"> Tipo de Documento: </span> {{$formulario->tipo_documento}}</h5>
            <h5 class="card-title"> <span class="titulo"> Nº do Documento: </span> {{$formulario->numero_documento}}</h5>
        </div>
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
