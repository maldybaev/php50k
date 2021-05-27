<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function index()
  {
    echo "Это Главная страница";
  }

    public function aboutus()
  {
    echo 'Это страница "О Нас"';
  }
}