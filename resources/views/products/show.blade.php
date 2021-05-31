@extends('layouts.app')

 @section('title', $product['name'])

 @section('content')

 <div><a href="/products"><Назад</a></div>
  <br>
    <div class="item">
        <div><h2>{{ $product['name']}}</h2></div>
        <div> Автор: {{ $product['manufacturer'] }}</div>
        <div> Автор: {{ $product['price'] }}</div>
        <div> Автор: {{ $product['description'] }}</div>
    </div>

@endsection