<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();

      return view('index',compact('books'));
     }

    public function create()
    {
        $authors = Author::all();
        return view('create', compact('authors'));
    }


    public function store(BookRequest $request)
    {
        $book = Book::create($request->all());
        return redirect()->route('book.index');
    }






}
