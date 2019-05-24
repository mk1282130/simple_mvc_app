<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // $books = Book::all();
        $books = Book::where('title', 'book1') ->get();
        return view('books.index', compact('books'));
    }
 
    public function create()
    {
        return view('create');
    }
}
