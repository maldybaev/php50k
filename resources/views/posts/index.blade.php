@extends('layout')
 @section('content')
 <div><a href="/posts/create">Создать пост</a></div>
 <br><br>
 @foreach ($posts as $post)
    <div class="item">
      <input type="hidden" name="id" value="{{ $post['id'] }}">
      <h1><a href="">{{ $post['title'] }}</a></h1>
      <div class="meta">Автор: {{ $post['author'] }}</div>
      <div class="meta">Дата: {{ $post['date'] }}</div>
      <p>{{ $post['description'] }}</p>
      <div>
        <form action="/posts/edit" method="POST"><a href="/posts/edit" class="button">Редактировать</a></form>
        <form action="/posts/delete" method="POST"><a href="/posts/delete" class="button">Удалить</a></form>
    </div>
    <hr>
    <br>
    @endforeach
 @endsection