<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{

  public function index()
  {
    echo "Это страница товаров";
  }

  public function create()
  {
    echo "Это страница <b>создания</b> товара";
  }

    public function edit()
  {
    echo "Это страница <b>изменения</b> товара";
  }

      public function delete()
  {
    echo "Это страница <b>удаления</b> товара";
  }

}