@extends('master')

@section('content')
   <h2> List of all the books titles </h2>
   @empty($books)
       <div> There are no books yet! Try creating one </div>
   @endempty

   <ul>
   @foreach ($books as $book)
       <li> Id: {{ $book->id }} </li>
       <li> Title: {{ $book->title }} </li>
       <li> Description: {{ $book->description }} </li>
       <li> Created At: {{ $book->created_at }} </li>
       <li> Updated At: {{ $book->updated_at }} </li>
       <br>
   @endforeach
   </ul>
@endsection
