<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
  $value = Session::get('usuario');
    return view('home',compact('value'));
});
Route::get('welcome', 'welcomeCtrl@getWelcomeView');
Route::get('register', 'userCtrl@registerView');
Route::get('companyRegister', 'userCtrl@companyRegiterView');
Route::post('/guardarUsuario','userCtrl@register');
Route::get('logIn','userCtrl@logInView');
Route::post('/logInCheck', 'userCtrl@logInCheck');
Route::get('logOut', 'userCtrl@logOut');
Route::get('userRegister', 'userCtrl@userRegister');
Route::get('config', 'userCtrl@config');


Route::get('addProduct', 'productCtrl@addProduct');
Route::post('saveProduct/{id}', 'productCtrl@saveProduct');
Route::get('modifyProducts','productCtrl@modifyProductsView');
Route::get('modifyProductById/{id}', 'productCtrl@modifyProductById');
Route::post('aceptarModificacion/{id}', 'productCtrl@aceptarModificacion');
Route::get('deleteProductById/{id}', 'productCtrl@deleteProductById');
Route::get('deleteProducts', 'productCtrl@deleteView');
Route::get('products/{id}','productCtrl@productsFromId');

Route::get('/orderConfirm/{emp_id}/{id}','productCtrl@orderConfirmView');
Route::post('confirmOrder/{emp_id}','productCtrl@orderConfirm');
Route::get('showOrderList', 'productCtrl@showOrderList');

Route::get('deleteFromCatalog/{id}','productCtrl@deleteFromCatalog');
Route::get('orderSuccessful/{id}','productCtrl@orderSuccessful');
Route::get('onTheWay/{id}','productCtrl@onTheWay');
Route::get('moreInfo/{userId}', 'productCtrl@moreInfo');

Route::get('changeUserInfo','userCtrl@changeUserInfo');
Route::get('addUserInfo','userCtrl@addUserInfo');
Route::post('modificarInfo', 'userCtrl@modificarInfo');
Route::post('addColonia','userCtrl@addColonia');