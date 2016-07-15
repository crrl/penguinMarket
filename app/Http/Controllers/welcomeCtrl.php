<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\empresa;

class welcomeCtrl extends Controller
{
  public function getWelcomeView() {
    $empresas = DB::table('empresa')->paginate(3); //->paginate(2)
    return view('welcome',compact('empresas'));
  }
}
