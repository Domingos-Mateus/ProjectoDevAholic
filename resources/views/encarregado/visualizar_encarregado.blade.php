@extends('layouts2.app2')
    
    @section('conteudo')

                <p>{{$encarregado->nome_encarregado}}</p>
                <p>{{$encarregado->sobrenome_encarregado}}</p>
                <p>{{$encarregado->email}}</p>
                <p>{{$encarregado->telefone}}</p>
                <p>{{$encarregado->cpf}}</p>
                <p>{{$encarregado->rg}}</p>
                <p>{{$encarregado->passaporte}}</p>
                <p>{{$encarregado->Anexo}}</p>

                <hr>

                @foreach($criancas as $crianca)
    
                <p>Nome da Criança</p>
                <p>{{$crianca->nome_crianca}}</p>
                <p>{{$crianca->sobrenome_crianca}}</p>
                <p>{{$crianca->data_nascimento}}</p>
                @endforeach
    @endsection