<?php
/**
 * Created by PhpStorm.
 * User: rui
 * Date: 25/09/16
 * Time: 01:00
 */

namespace CodeAgenda\Http\Controllers;


class AgendaController extends Controller
{
    public function index(){
        return view('layout');
    }
}