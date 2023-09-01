<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crianca;
use App\Models\encarregado;
use File;
use Alert;
use Illuminate\Support\Facades\Auth;

class cadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuarioLog = Auth::user();


        
        return view('admin/registar', compact('usuarioLog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $encarregado = new Encarregado;
        $encarregado->nome_encarregado = $request->nome;
        $encarregado->sobrenome_encarregado = $request->sobrenome;
        $encarregado->email = $request->email;
        $encarregado->telefone = $request->telefone;
        $encarregado->cpf = $request->cpf;
        $encarregado->rg = $request->rg;
        $encarregado->passaporte = $request->passaporte;
        $encarregado->anexo = $request->anexo;

        $encarregado->save();

        //return $encarregado;

        //Criança
        $crianca = new Crianca;
        $crianca->nome_crianca = $request->nome_crianca;
        $crianca->sobrenome_crianca = $request->sobrenome_crianca;
        $crianca->data_nascimento = $request->data_nascimento;
        $crianca->id_encarregado = $encarregado->id;
        

        $crianca->save();
        Alert::success('Salvo', 'Registro salvo com sucesso');
        //return 'Dados salvo com sucesso';
        return redirect('admin/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $crianca = Crianca::find($id);
        $encarregado = Encarregado::find($crianca->id_encarregado);
        return view('cadastro/editar_cadastro', compact('crianca','encarregado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
        $crianca = Crianca::find($id);

        $crianca->nome_crianca = $request->input('nome_crianca');
        $crianca->nome_crianca = $request->input('nome_crianca');
        $crianca->data_nascimento = $request->input('data_nascimento');
        $crianca->id_encarregado = $request->input('id_encarregado');

        //Para editar Encarregado

        $encarregado = Encarregado::find($id);
        $encarregado->nome_encarregado = $request->input('nome_encarregado');
        $encarregado->sobrenome_encarregado = $request->input('sobrenome_encarregado');
        $encarregado->email = $request->input('email');
        $encarregado->telefone = $request->input('telefone');
        $encarregado->cpf = $request->input('cpf');
        $encarregado->rg = $request->input('rg');
        $encarregado->passaporte = $request->input('passaporte');
        $encarregado->anexo = $request->input('anexo');

        Alert::success('Salvo', 'Dados Salvo com sucesso com sucesso');


        return redirect('crianca/listar_crianca');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
