<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use App\Book;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('home', compact('books'));
    }

    public function store()
    {
        $book = new Book();
        $book->title = 'valor';
        $book->subtitle = 'valor';
        $book->save();
        $book->delete();
        $book->update();
    }

    public function admin()
    {
        $books = Book::all();
        return view ('admin', compact('books'));
    }

    public function userlogin()
    {

        return view ('login');
    }
}
