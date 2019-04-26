@extends('master')

@section('content')
    <h2>List of all the books titles2</h2>
    @empty($books)
        <div>There are NO BOOK yet! Try creating one</div>
    @endempty

    <ul>
    @foreach($books as $book)
        <li>ID: {{ $book -> id }}</li>
        <li>Title: {{ $book -> title }}</li>
        <li>Description: {{ $book -> created_at }}</li>
        <li>Updated : {{ $book -> Updated_at }}</li>
    @endforeach
    </ul>
@endsection