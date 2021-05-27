<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FAQController extends Controller
{

  public function index()
  {
    echo "Это страница FAQ";
  }

  public function create()
  {
    echo "Это страница <b>создания</b> FAQ вопроса";
  }

    public function edit()
  {
    echo "Это страница <b>изменения</b> FAQ вопроса";
  }

      public function delete()
  {
    echo "Это страница <b>удаления</b> FAQ вопроса";
  }

}