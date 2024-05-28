<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
class HomeController extends Controller
{
    public function index(){
        $data = Book::limit(4)->get();
        return view('home.index',compact('data'));
    }
}
