@extends('master')

@section('content')
<h1>Create a Book</h1>

<!-- <form action="/book/store" method="POST"> -->
<form action="{{ route('book.store') }}" method="POST">
<!-- routeから名前を↑呼び出している。直接パスで呼び出してもいいけど、名前を付けた方がわかりやすい -->

    <!-- 419エラーを回避するためのワード -->
    @csrf

    <a href="/books">Back</a>
    <br>
    
    <p>Title:</p>
    <input type="text" name="title">

    <p>Desctiption:</p>
    <input type="text" name="description">
    
    <br><br>

    <input type="submit" value="Create">

</form>
@endsection