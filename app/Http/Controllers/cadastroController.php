<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crianca;
use App\Models\encarregado;
use File;
use Alert;
use Illuminate\Support\Facades\Auth;
use SheetDB\SheetDB;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;


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
        $usuarioLog = Auth::user();

        $client = new Client();
        $url = 'https://sheetdb.io/api/v1/'.env('KEY_GOOGLE_SHEET').'?sort_by=id';

        $headers = [
            'Content-type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers
        ]);

        $formularios = json_decode($response->getBody()->getContents());


        return view('admin/app_listar_formularios', compact('formularios','usuarioLog'));
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

        $date = date('Ymd');
        $time = date('His');
        $datetimeNumeric = $date;

        $caminho_anexo = null;

        if($request->anexo){
            $anexo = $request->anexo;
            $extensaoAnexo = $anexo->getClientOriginalExtension();
            if($extensaoAnexo !='pdf' && $extensaoAnexo != 'jpg' && $extensaoAnexo != 'png'){
                return back()->with('Erro', 'Anexo com formato inválido');
            }
        }

        if ($request->anexo) {
            File::move($anexo, public_path().'/anexos/anexo_'.$datetimeNumeric.'.'.$extensaoAnexo);
            $caminho_anexo = '/anexos/anexo_'.$datetimeNumeric.'.'.$extensaoAnexo;
        }

    $sheetdb = new SheetDB(env('KEY_GOOGLE_SHEET'));

    // Receba os dados das crianças
    $nomesCriancas = $request->input('nome_crianca');
    $sobrenomesCriancas = $request->input('sobrenome_crianca');
    $datasNascimentoCriancas = $request->input('data_nascimento');

    $criancas = [];

    $sheetdb->create(
        [
            'nome_encarregado' => $request->nome,
            'sobrenome_encarregado' => $request->sobrenome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'tipo_documento' => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'caminho_anexo' => $caminho_anexo,
            'nome_crianca' => null,
            'sobrenome_crianca' => null,
            'data_nascimento_crianca' => null,
        ]
    );


    if (count($nomesCriancas) > 0)
    {
        // Verifique se os arrays têm o mesmo comprimento antes de processar
        if (count($nomesCriancas) === count($sobrenomesCriancas) && count($sobrenomesCriancas) === count($datasNascimentoCriancas)) {
            for ($i = 0; $i < count($nomesCriancas); $i++) {
                $crianca = [
                    'nome_crianca' => $nomesCriancas[$i],
                    'sobrenome_crianca' => $sobrenomesCriancas[$i],
                    'data_nascimento' => $datasNascimentoCriancas[$i],
                ];

                $criancas[] = $crianca;


                $sheetdb->create(
                    [
                        'nome_encarregado' => $request->nome,
                        'sobrenome_encarregado' => $request->sobrenome,
                        'email' => $request->email,
                        'telefone' => $request->telefone,
                        'tipo_documento' => $request->tipo_documento,
                        'numero_documento' => $request->numero_documento,
                        'caminho_anexo' => $caminho_anexo,
                        'nome_crianca' => $crianca['nome_crianca'],
                        'sobrenome_crianca' => $crianca['sobrenome_crianca'],
                        'data_nascimento_crianca' => $crianca['data_nascimento'],
                    ]
                );
            }
        }
    }
        // $crianca->save();
        Alert::success('Salvo', 'Formulário salvo com sucesso');
        //return 'Dados salvo com sucesso';
        return redirect('admin/dashboard');
    }

    public function show($id)
    {
        //

        $usuarioLog = Auth::user();

        $client = new Client();
        $url = 'https://sheetdb.io/api/v1/'.env('KEY_GOOGLE_SHEET').'/search?id='.$id;



        $headers = [
            'Content-type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers
        ]);

        $formulario = json_decode($response->getBody()->getContents());
        $formulario = $formulario[0];

        return view('admin/app_visualizar_formulario', compact('formulario','usuarioLog'));
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
        $usuarioLog = Auth::user();

        $client = new Client();
        $url = 'https://sheetdb.io/api/v1/'.env('KEY_GOOGLE_SHEET').'/search?id='.$id;



        $headers = [
            'Content-type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers
        ]);

        $formulario = json_decode($response->getBody()->getContents());
        $formulario = $formulario[0];

        return view('admin/app_editar_formulario', compact('formulario','usuarioLog'));
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



        $client = new Client();
        $url = 'https://sheetdb.io/api/v1/'.env('KEY_GOOGLE_SHEET').'/id/'.$id;



        $response = Http::withHeaders([
           'Content-type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
        ])->patch($url, [
            'nome_encarregado' => $request->nome,
            'sobrenome_encarregado' => $request->sobrenome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'tipo_documento' => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'caminho_anexo' => $request->anexo,
            'nome_crianca' => $request->nome_crianca,
            'sobrenome_crianca' => $request->sobrenome_crianca,
            'data_nascimento_crianca' => $request->data_nascimento_crianca,
        ]);

        Alert::success('Salvo', 'Formulário Atualizado com sucesso');
        //return 'Dados salvo com sucesso';
        return redirect('admin/dashboard');

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

        $client = new Client();
        $url = 'https://sheetdb.io/api/v1/'.env('KEY_GOOGLE_SHEET').'/id/'.$id;


        $headers = [
            'Content-type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
        ];

        $response = $client->request('delete', $url, [
            'headers' => $headers
        ]);

        $formulario = json_decode($response->getBody()->getContents());


        Alert::success('Salvo', 'Formulário Eliminado com sucesso');
        return redirect('admin/dashboard');
    }

    public function imprimir($id){


        $usuarioLog = Auth::user();

        $client = new Client();
        $url = 'https://sheetdb.io/api/v1/'.env('KEY_GOOGLE_SHEET').'/search?id='.$id;



        $headers = [
            'Content-type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers
        ]);

        $formulario = json_decode($response->getBody()->getContents());
        $formulario = $formulario[0];

        return view('admin/app_imprimir_formulario', compact('formulario','usuarioLog'));
    }

    public function impressao($id){


        $usuarioLog = Auth::user();

        $client = new Client();
        $url = 'https://sheetdb.io/api/v1/'.env('KEY_GOOGLE_SHEET').'/search?id='.$id;



        $headers = [
            'Content-type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers
        ]);

        $formulario = json_decode($response->getBody()->getContents());
        $formulario = $formulario[0];

        return view('admin/app_impressao_formulario', compact('formulario','usuarioLog'));
    }
}
