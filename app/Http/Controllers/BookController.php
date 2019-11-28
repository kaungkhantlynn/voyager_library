<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
        public function getBook(){
            $books = Book::with(['author','category'])
                ->orderBy('count','desc')->get();
            return view('vendor.voyager.books.browse',compact('books'));
        }
        
        public function borrowBook($book_id){
            $book = Book::find($book_id);
            $users = User::all();
            return view('vendor.voyager.books.borrow',compact('users','book'));
        }
}
