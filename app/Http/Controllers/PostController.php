<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{

  public function index()
  {
    echo "Это страница новостей";
  }

  public function create()
  {
    echo "Это страница <b>создания</b> новостей";
  }

    public function edit()
  {
    echo "Это страница <b>изменения</b> новости";
  }

      public function delete()
  {
    echo "Это страница <b>удаления</b> новости";
  }

}

?>