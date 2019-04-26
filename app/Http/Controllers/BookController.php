<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
   public function index()
   {
       $books = book::all();
       return view('books.index', compact('books'));
   }

   public function create()
   {
       return view('books.create');
   }

   public function store(Request $request)
    {
        // dd($request->all());
        $book = new Book;
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book -> save();
    }

    public function show()
    {
        $book = Book::find(1);
        return view('books.show', compact('book'));
    }

}
