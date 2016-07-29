<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\empresa;
use App\usuario;
use App\Colonia;

class userCtrl extends Controller
{
    public function registerView() {
      $value = Session::get('usuario');
      return view('register', compact('value'));
    }

    public function companyRegiterView() {
      $value = Session::get('usuario');
      return view('companyRegister',compact('value'));
    }

    public function userRegister() {
      $value = Session::get('usuario');
      return view('userRegister', compact('value'));
    }

    public function register(Request $request) {
      $value = Session::get('usuario');
      if ($request->Input('Giro')) {
        if (!$request->Input('Nombre') || !$request->Input('Giro') || !$request->Input('Correo') || !$request->Input('Password')) {
          return view('companyRegister',compact('value'))->render();
        }
        $empresa = new empresa();
        $empresa->Nombre = $request->Input('Nombre');
        $empresa->Giro = $request->Input('Giro');
        $empresa->Correo = $request->Input('Correo');
        $empresa->contrasena = $request->Input('Password');
        $empresa->save();
      } else {
        if (!$request->Input('Nombre') || !$request->Input('Telefono') || !$request->Input('Password') || !$request->Input('Colonia') || !$request->Input('Correo') || !$request->Input('Numero') || !$request->Input('Calle')) {
          return view('userRegister',compact('value'));
        }
        $usuario = new usuario();
        $usuario->Telefono = $request->Input('Telefono');
        $usuario->Contrasena = $request->Input('Password');
        $usuario->Colonia = $request->Input('Colonia');
        $usuario->Nombre = $request->Input('Nombre');
        $usuario->Correo = $request->Input('Correo');
        $usuario->Numero = $request->Input('Numero');
        $usuario->Calle = $request->Input('Calle');
        $usuario->save();
      }
      return redirect('welcome');
    } 

    public function logInView() {
     $value = Session::get('usuario');
    return view('signIn',compact('value'));
    }

    public function logInCheck(Request $request) {
     $value = Session::get('usuario');
      $user = DB::table('empresa')->where('Correo', '=', $request->Input('Correo'))->where('contrasena', '=', $request->Input('Password'))->first();
      if(!$user) {
        $user = DB::table('usuario')->where('Correo', '=', $request->Input('Correo'))->where('contrasena', '=', $request->Input('Password'))->first();
        if(!$user) {
          return view('signIn',compact('value'));
        } else {
          Session::put('usuario', $user->nombre);
          Session::put('correo', $user->correo);
          Session::put('id', $user->id);
          Session::put('tipo','2');
        }
      } else {
        Session::put('usuario', $user->nombre);
        Session::put('correo', $user->correo);
        Session::put('id', $user->id);
        Session::put('tipo', '1');
      }
      return redirect('welcome');
    }

    public function config() {
      $value = Session::get('usuario');
      $id = Session::get('id');
      $tipo = Session::get('tipo');
      return view('config',compact('value','tipo','id'));

    }

    public function logOut() {
      Session::flush();
      return redirect('welcome');
    }

    public function changeUserInfo() {
      $value = Session::get('usuario');
      $id = Session::get('id');
      $tipo = Session::get('tipo');
      $user = DB::table('usuario')->where('id', '=', $id)->first();
      $colonia = DB::table('coloniaUsuario')->where('id', '=', $id)->get();
      return view('changeInfo',compact('value','id','tipo','user','colonia'));
    }

    public function modificarInfo(Request $request) {
      $value = Session::get('usuario');
      $id = Session::get('id');
      $tipo = Session::get('tipo');
      $user = DB::table('usuario')->where('id', '=', $id)->first();
      $colonia = DB::table('coloniaUsuario')->where('id', '=', $id)->get();
      if (!$request->Input('Nombre') || !$request->Input('Telefono') || !$request->Input('Colonia') || !$request->Input('Calle') || !$request->Input('Numero')) {
        return view('changeInfo',compact('value','id','tipo','user','colonia'));
      } else {
        $usuario = usuario::find($id);
        $usuario->Telefono = $request->Input('Telefono');
        $usuario->Contrasena = $request->Input('Password');
        $usuario->Colonia = $request->Input('Colonia');
        $usuario->Nombre = $request->Input('Nombre');
        $usuario->Correo = $request->Input('Correo');
        $usuario->Numero = $request->Input('Numero');
        $usuario->Calle = $request->Input('Calle');
        $usuario->save();
        return redirect('config');
      }
    }

      public function addUserInfo() {
        $value = Session::get('usuario');
        $id = Session::get('id');
        $tipo = Session::get('tipo');
        return view('addColonia',compact('value','id','tipo'));
      }

      public function addColonia(Request $request) {
        $value = Session::get('usuario');
        $id = Session::get('id');
        $tipo = Session::get('tipo');
        if (!$request->Input('Colonia') || !$request->Input('Calle') || !$request->Input('Numero')  ) {
          return view('addColonia',compact('value','id','tipo'));
        } else {

        $colonia = new Colonia();
        $colonia->colonia = $request->Input('Colonia');
        $colonia->calle = $request->Input('Calle');
        $colonia->num = $request->Input('Numero'); 
        $colonia->id = $id;
        $colonia->save();
        return redirect('config');
      }
    }
}
