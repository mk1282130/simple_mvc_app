<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store( Request $request )
    {
        // dd($request->all());
        $book = new Book;
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->save();
        return redirect('/books');
    }

    public function show($id)
    {
        // dd($id);
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->save();
        return redirect('/book/'.$id);
        // リダイレクト
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }
}