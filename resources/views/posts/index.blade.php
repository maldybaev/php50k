@extends('layouts.app')

 @section('title', 'Главные новости')

 @section('content')

 <div><a href="/posts/create">Создать пост</a></div>
 <br><br>

 @foreach ($posts as $id => $post)
    <div>
      <h1><a href="{{ route('posts.show', ['post_id' => $id]) }}">{{ $post['title'] }}</a></h1>
      <div>Автор: {{ $post['author'] }}</div>
      <div>Дата: {{ $post['date'] }}</div>
      <br>
      <p>{{ $post['description'] }}</p>
      <div>
        <a href="/posts/edit">Редактировать</a>
        <a href="/posts/delete">Удалить</a>
      </div>
    </div>
    <hr>
    <br>
  @endforeach
 @endsection