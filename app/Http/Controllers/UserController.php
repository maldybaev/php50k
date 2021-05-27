<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{

  public function profile()
  {
    echo "Профиль пользователя";
  }

  public function reg()
  {
    echo "Это страница <b>регистрации</b> нового пользователя";
  }

    public function edit()
  {
    echo "Это страница <b>изменения</b> профиля пользователя";
  }

      public function delete()
  {
    echo "Это страница <b>удаления</b> профиля пользователя";
  }

}