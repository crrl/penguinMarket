<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empresa;

class welcomeCtrl extends Controller
{
  public function getWelcomeView() {
    return view('welcome');
  }
}
