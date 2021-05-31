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
        <form action="/posts/edit" method="POST"><a href="/posts/edit">Редактировать</a></form>
        <form action="/posts/delete" method="POST"><a href="/posts/delete">Удалить</a></form>
      </div>
    </div>
    <hr>
    <br>
  @endforeach
 @endsection