@extends('layouts2.app2')
    
    
    @section('conteudo')
    <div class="pt-3" style="display: flex; justify-content: center">
        <div class="col-9 col-md-5 col-lg-4">
        <h5>Dados da criança</h5>
        <p>{{$criancas->nome_crianca}}</p>
        <p>{{$criancas->sobrenome_crianca}}</p>
        <p>{{$criancas->data_nascimento}}</p>



        <hr>

        @foreach($encarregado as $encarregado)

        <p>Encarregado da criança</p>
        <p>{{$encarregado->nome_encarregado}}</p>
        <p>{{$encarregado->sobrenome_encarregado}}</p>
        <p>{{$encarregado->email}}</p>
        <p>{{$encarregado->telefone}}</p>
        <p>{{$encarregado->cpf}}</p>
        <p>{{$encarregado->rg}}</p>
        <p>{{$encarregado->passaporte}}</p>
        <p>{{$encarregado->Anexo}}</p
        @endforeach

        <a href="#"><button>Imprimir</button></a>


        @endsection
 
               