<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\empresa;


class welcomeCtrl extends Controller
{
  public function getWelcomeView() {
    $value = Session::get('usuario');
    $empresas = DB::table('empresa')->paginate(6);
    return view('welcome',compact('empresas','value'));
  }
}
