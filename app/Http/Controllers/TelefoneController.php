<?php
/**
 * Created by PhpStorm.
 * User: rui
 * Date: 01/10/16
 * Time: 15:28
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Telefone;

class TelefoneController extends Controller
{
    public function destroy($id){
        Telefone::destroy($id);

        return redirect()->route('agenda.index');
    }
}