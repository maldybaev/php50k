@extends('layout')
 @section('content')
 <div><a href="/products/create">Добавить товар</a></div>
 <br><br>
 @foreach ($products as $product)
    <div class="item">
      <input type="hidden" name="id" value="{{ $product['id'] }}">
      <h1><a href="">{{ $product['name'] }}</a></h1>
      <div class="meta">Производитель: {{ $product['manufacturer'] }}</div>
      <div class="meta">Цена: {{ $product['price'] }}</div>
      <p>{{ $product['description'] }}</p>
      <div>
        <form action="/products/edit" method="POST"><a href="/products/edit" class="button">Редактировать</a></form>
        <form action="/products/delete" method="POST"><a href="/products/delete" class="button">Удалить</a></form>
    </div>
    <hr>
    <br>
    @endforeach
 @endsection