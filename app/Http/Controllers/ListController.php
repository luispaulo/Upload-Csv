<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function listar()
    {

        $vendas = DB::table('vendas')->get();
        return view('pages.list',['vendas' => $vendas]);
    }
}
