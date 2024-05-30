<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\BorrowList;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = Book::limit(4)->get();
        return view('home.index', compact('data'));
    }
    public function book_request($id)
    {
        $book = Book::find($id);

        if ($book->quantity >= 1) {
            if (Auth::id()) {
                $user = Auth::user()->id;
                $borrow = new BorrowList;

                $borrow->book_id = $book->id;
                $borrow->user_id = $user;
                $borrow->save();
                return redirect()->back()->with('message', 'Peminjaman akan dikonfirmasi');
            } else {
                return redirect('/login');
            }
        } else {
            return redirect()->back()->with('alert', 'Bukunya tidak tersedia');
        }
    }
    public function myHistory()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $borrow = BorrowList::where('user_id', $id)->orderBy('status', 'asc')->get();
            return view('home.myHistory', compact('borrow'));
        }
    }

    public function explore()
    {
        $books = Book::all();
        $categories = Category::all();
        return view('home.explore', compact('books', 'categories'));
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $word = $request->keyword;
        $cat = $request->Category;

        if ($cat == 'All Categories') {
            $books = Book::where('title', 'like', '%' . $word . '%')
                ->orWhere('author_name', 'like', '%' . $word . '%')
                ->get();
        } else {
            $books = Book::where('category_id', $cat)
                ->where(function ($query) use ($word) {
                    $query->where('title', 'like', '%' . $word . '%')
                        ->orWhere('author_name', 'like', '%' . $word . '%');
                })
                ->get();
        }

        return view('home.explore', compact('books', 'categories'));
    }
}
