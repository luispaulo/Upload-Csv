<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function list()
    {

        $sales = DB::table('sales')->get();
        return view('pages.list',['sales' => $sales]);
    }
}
