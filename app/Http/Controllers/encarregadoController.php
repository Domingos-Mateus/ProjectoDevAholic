<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encarregado;
use App\Models\Crianca;
use File;
use Alert;
use DB;

class encarregadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $encarregados = DB::table('encarregados')->paginate(10);

        //return $encarregados;

        return view('admin/listar_encarregado', compact('encarregados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('encarregado/registar_encarregado');
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

        if($request->anexo){
            $anexo = $request->anexo;
            $extensaoAnexo = $anexo->getClientOriginalExtension();
            if($extensaoAnexo !='pdf' && $extensaoAnexo != 'jpg' && $extensaoAnexo != 'png'){
                return back()->with('Erro', 'Anexo com formato inválido');
            }
        }

        $encarregado->save();

        if ($request->anexo) {
            File::move($anexo, public_path().'/anexos/anexo_'.$encarregado->id.'.'.$extensaoAnexo);
            $encarregado->anexo = '/anexos/anexo_'.$encarregado->id.'.'.$extensaoAnexo;

            $encarregado->save();
        }
        Alert::success('Cadastrado', 'Encarregado cadastrado com sucesso');

        return redirect('crianca/registar_crianca');

        //return redirect('encarregado/listar_encarregado');
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
        $encarregado = Encarregado::find($id);

        $criancas = Crianca::where('id_encarregado', $id)->get();


        //return $encarregado;
        //return $criancas;
        return view('encarregado/visualizar_encarregado', compact('encarregado','criancas'));

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
        $encarregado = Encarregado::find($id);
        return view('encarregado/editar_encarregado', compact('encarregado'));
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
        $encarregado = Encarregado::find($id);
        $encarregado->nome_encarregado = $request->input('nome_encarregado');
        $encarregado->sobrenome_encarregado = $request->input('sobrenome_encarregado');
        $encarregado->email = $request->input('email');
        $encarregado->telefone = $request->input('telefone');
        $encarregado->cpf = $request->input('cpf');
        $encarregado->rg = $request->input('rg');
        $encarregado->passaporte = $request->input('passaporte');
        $encarregado->anexo = $request->input('anexo');
        // Mais atributos do modelo
        $encarregado->save();

        Alert::success('Actualizado', 'Encarregado Actualizado com sucesso');
        return redirect('admin/listar_encarregado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $totalCriancas = Crianca::where('id_encarregado', '=', $id)->count();
        //return $totalCriancas;

        if($totalCriancas > 0){
            Alert::warning('Impossível', 'Existe criança vinculada a este encarregado!');
            return redirect('admin/listar_encarregado');
        }
        //
        Encarregado::destroy($id);
    //return 'Dados eliminado com sucesso';
    Alert::success('Eliminar', 'Encarregado Eliminado com sucesso');
    return redirect('admin/listar_encarregado');
    }
}
