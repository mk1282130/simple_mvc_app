@extends('master')

@section('content')
<h1>Editing a Book # {{ $book->id }}</h1>

<form action="/book/{{ $book->id }}/update" method="POST">

<!-- 419エラーを回避するためのワード -->

    @csrf

    <a href="/book/{{ $book->id }}">Back</a>

    <p>Title:</p>
    <input type="text" name="title" value="{{ $book->title }}">

    <p>Desctiption:</p>
    <input type="text" name="description" value="{{ $book->description }}">
    
    <br><br>

    <input type="submit" value="edit">

</form>
@endsection

