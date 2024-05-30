<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\BorrowList;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
        $data = Book::limit(4)->get();
        return view('home.index',compact('data'));
    }
    public function book_request($id){
        $book = Book::find($id);

        if ($book->quantity >= 1){
            if(Auth::id()){
                $user = Auth::user()->id;
                $borrow = new BorrowList;

                $borrow->book_id = $book->id;
                $borrow->user_id = $user;
                $borrow->save();
                return redirect()->back()->with('message','Peminjaman akan dikonfirmasi');
            }
            else{
                return redirect('/login');
            }
        }else{
            return redirect()->back()->with('alert', 'Bukunya tidak tersedia');
        }
    }
}
