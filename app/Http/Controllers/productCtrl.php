<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Session;
use DB;
use Mail;

use App\product;
use App\orders;

class productCtrl extends Controller
{
    public function addProduct() {
      $value = Session::get('usuario');
      $id = Session::get('id');
      return view('productAdd',compact('value','id'));
    }

    public function saveProduct(Request $request, $id) {
        $value = Session::get('usuario');
      if (!$request->Input('Nombre') || !$request->Input('Precio')) {
        return view('productAdd',compact('value','id'));
      } else {

        $product = new product();
        $product->nombre = $request->Input('Nombre');
        $product->id_empresa = $id;
        $product->precio = $request->Input('Precio');
        $product->save();
        return redirect('config');
      }
    }

    public function modifyProductsView() {
      $value = Session::get('usuario');
      $id = Session::get('id');
      $dish = DB::table('products')->where('id_empresa', '=', $id)->paginate(8);
      return view('modifyProduct',compact('dish','id','value'));
    }

    public function modifyProductById($id) {
      $value = Session::get('usuario');
      $product = DB::table('products')->where('id','=',$id)->first();
      return view('modifyProductById',compact('product','value','id'));
    }

    public function aceptarModificacion(Request $request,$idp) {
      $value = Session::get('usuario');
      $id = Session::get('id');
      $tipo = Session::get('tipo');
      if(!$request->input('Nombre') || !$request->input('Precio'))
      {
        $product = DB::table('products')->where('id','=',$idp)->first();
        return view('modifyProductById',compact('product','value','id'));
      } else {
        $product = product::find($idp);
        $product->Nombre = $request->input('Nombre');
        $product->Precio = $request->input('Precio');
        $product->save();
        return redirect('config');
      }
    }

    public function deleteProductById($idp) {
      $product = product::find($idp)->delete();
      return Redirect('config');
    }

    public function deleteView() {
      $value = Session::get('usuario');
      $id = Session::get('id');
      $dish = DB::table('products')->where('id_empresa', '=', $id)->paginate(8);
      return view('deleteProduct',compact('dish','id','value'));
    }

    public function productsFromId($ide) {
      $dish = DB::table('products')->where('id_empresa', '=', $ide)->paginate(8);
      $value = Session::get('usuario');
      $tipo = Session::get('tipo');
      return view('products', compact('dish','value','tipo','ide'));
    }

    public function orderConfirmView($businessId,$productId) {
       $dish = DB::table('products')->where('id_empresa','=',$businessId)->where('id','=',$productId)->first();
      $value = Session::get('usuario');
      return view('orderConfirm',compact('dish','value'));
    }

    public function orderConfirm(Request $request, $busineesId) {
      $value = Session::get('id');
      $nombre = Session::get('usuario');
      $empresas = DB::table('empresa')->paginate(6);
      $dish = DB::table('products')->where('id','=',$request->id)->where('id_empresa','=',$busineesId)->first();
      $precio = $dish->precio;
      $order = new orders();
      $order->empresa_id = $busineesId;
      $order->producto_id = $request->id;
      $order->producto_nombre= $dish->nombre;
      $order->cantidad = $request->Cantidad;
      $order->total = $precio * $request->Cantidad;
      $order->cliente_id = $value;
      $order->cliente_nombre = $nombre;
      $order->save();
      return redirect('welcome');
    }

    public function showOrderList() {
      $value = Session::get('usuario');
      $id = Session::get('id');
      $orders = DB::table('orden')->where('empresa_id','=',$id)->get();
      return view('orderList',compact('orders','value'));
    }

    public function deleteFromCatalog($id) {
      $order = DB::table('orden')->where('id','=',$id)->delete();
      return redirect('showOrderList');
    }

    public function orderSuccessful($id) {
     $order = orders::find($id);
      $order->status = 'entregado';
      $order->save();
      return redirect('showOrderList');
    }

    public function onTheWay($id) {
     $order = orders::find($id);
      $order->status = 'en camino';
      $order->save();
      return redirect('showOrderList');
    }

    public function moreInfo($userId) {
      $value = Session::get('usuario');
      $user = DB::table('usuario')->where('id','=',$userId)->first();
      $direccion = DB::table('coloniaUsuario')->where('id','=',$userId)->get();
      return view('moreInfo', compact('user','value','direccion'));
    }
}
