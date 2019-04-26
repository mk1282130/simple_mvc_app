@extends('master')

@section('content')
    <div class="container">
        <h2>Book # {{ $book->id }} : {{ $book->title }}</h2>
        <p>DESCRIPTION</p>
    </div>
@endsection