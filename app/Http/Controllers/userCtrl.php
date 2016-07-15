<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empresa;

class userCtrl extends Controller
{
    public function registerView() {
      return view('register');
    }

    public function companyRegiterView() {
      return view('companyRegister');
    }

    public function register(Request $request) {
      if (!$request->Input('Nombre') || !$request->Input('Giro') || !$request->Input('Correo') || !$request->Input('Password')) {
        echo '<script language="javascript">';
        echo 'alert("Faltan datos.");';
        echo '</script>';
        return view('companyRegister')->render();
      }
      $empresa = new empresa();
      $empresa->Nombre = $request->Input('Nombre');
      $empresa->Giro = $request->Input('Giro');
      $empresa->Correo = $request->Input('Correo');
      $empresa->contrasena = $request->Input('Password');
      $empresa->save();
      return Redirect('welcome');
    } 
}
