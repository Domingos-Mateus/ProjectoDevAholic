<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crianca;

use App\Models\Encarregado;
use File;
use Alert;
use DB;

class criancaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $criancas = DB::table('criancas')
                ->join('encarregados','encarregados.id','criancas.id_encarregado')
                ->select('criancas.*', 'encarregados.nome_encarregado')->paginate(10);

        //$encarregados = Encarregado::all()->paginate(10);
        $encarregados = DB::table('encarregados');

        //return $crianca;

        return view('admin/listar_crianca', compact('criancas','encarregados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $encarregados = Encarregado::all();
       
        
        return view('crianca/registar_crianca', compact('encarregados'));
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
        $crianca = new Crianca;
        $crianca->nome_crianca = $request->nome_crianca;
        $crianca->sobrenome_crianca = $request->sobrenome_crianca;
        $crianca->data_nascimento = $request->data_nascimento;
        $crianca->id_encarregado = $request->id_encarregado;
        

        $crianca->save();
        //return 'Salvo';

        // Alert::toast('Criança salva com sucesso', 'success');
        Alert::success('Salvo', 'Criança salva com sucesso');


        return redirect('crianca/listar_crianca');
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
        $criancas = Crianca::find($id);

        $encarregado = Encarregado::where('id', $id)->get();

        //return $crianca;
       // return view('crianca/visualizar_crianca', compact('crianca','encarregado'));


        //$encarregado = Encarregado::find($id);

        //$criancas = Crianca::where('id_encarregado', $id)->get();


        //return $encarregado;
        //return $crianca;
        return view('crianca/visualizar_crianca', compact('encarregado','criancas'));
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
        return view('crianca/editar_crianca', compact('crianca'));
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
        
        // Mais atributos do modelo
        $crianca->save();
        Alert::success('Actualizado', 'Criança Actualizada com sucesso');
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
        Crianca::destroy($id);

        
    
        //return 'Dados eliminado com sucesso';
        Alert::error('Eliminado', 'Criança Eliminada com sucesso');
        return redirect('admin/listar_crianca');
    }
}
