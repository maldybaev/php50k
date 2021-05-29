@extends('layout')
 @section('content')
 <div><a href="/posts"><Назад</a></div>
      <h1>Создание нового поста</h1>
      <br>
      <br>
      <form action="" method="POST">
          <p>Заголовок новости:
            <br>
            <input type="text" name="title" placeholder="Заголовок новости"></p>
          <p>Текст новости:
            <br>
            <textarea rows="10" cols="45" name="description" placeholder="Текст новости"></textarea></p>
        <p>
        <input type="submit" name="submit" value="Разместить статью">
        </p>
      </form>
 @endsection