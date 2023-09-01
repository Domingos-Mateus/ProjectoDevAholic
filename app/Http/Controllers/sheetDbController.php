<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;

class sheetDbController extends Controller
{
    //

    public function get_encarregados(){

        $sheetdb = new SheetDB('oz1psxg4blsfw');

        dd($sheetdb->get());
    }

    public function salvar_encarregado_gs(){

        $sheetdb = new SheetDB('58f61be4dda40');

        dd($sheetdb->create(
                            [
                                'name' => 'PC 2',
                                'name' => 'PC',
                                'age' => '12',
                                'comment' => 'aaa'
                            ]
                            ));
    }
}
