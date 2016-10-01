<?php
/**
 * Created by PhpStorm.
 * User: rui
 * Date: 01/10/16
 * Time: 15:24
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;

class ContatoController extends Controller
{
    public function destroy($id){
        Pessoa::destroy($id);

        return redirect()->route('agenda.index');

    }
}