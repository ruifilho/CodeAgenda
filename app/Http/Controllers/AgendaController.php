<?php
/**
 * Created by PhpStorm.
 * User: rui
 * Date: 25/09/16
 * Time: 01:00
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index($letra = "A"){

        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', compact('pessoas'));
    }

    public function busca(Request $request){
        $busca = $request->busca;
        $pessoas = [];
        if(!empty($busca)){
            $pessoas = Pessoa::where('apelido', 'like', "%{$busca}%")
                ->orWhere('nome', 'like', "%{$busca}%")
                ->get();
        }
        return view('agenda', compact('pessoas'));
    }
    

}