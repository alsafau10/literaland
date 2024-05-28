<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'admin'){
                return view('admin.index');
            }
            else{
                $data= Book::limit(4)->get();
                return view('home.index',compact('data'));
            }
        }else{
            return redirect() -> back();
        }
    }

    public function category_page(){
        $data = Category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request){
        $data = new Category;
        $data->cat_title = $request->category;
        $data->save();
        return redirect()->back()->with('message','Category Has Added Succesfully'); //return user to same page and pass session with specific key
    }

    public function cat_delete($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message',
        'Category has been Deleted Succesfully');
    }

    public function edit_data($id){
        $data = Category::find($id);
        return view('admin.edit',compact('data'));
    }

    public function update_category(Request $request, $id){
        $data = Category::find($id);
        $data->cat_title = $request->cat_edit;
        $data->save();
        return redirect('/category_page');
    }
    public function add_book(){
        $data = Category::all();
        return view('admin.add_book',compact('data'));
    }

    public function store_book(Request $request){
        $data = new Book;
        $data->title = $request->book_name;
        $data->author_name = $request->author_name;
        $data->quantity = $request->quantity;
        $data->description = $request->description;
        $data->category_id = $request->category;

        $book_image = $request-> book_img;
        if($book_image){
            $book_img_name = time().'.'.$book_image->getClientOriginalExtension();

            $request->book_img->move('book',$book_img_name);
            $data->book_img = $book_img_name;
        }
        $author_image = $request->author_img;
        if($author_image){
            $author_img_name = time().'.'.$author_image->getClientOriginalExtension();

            $request->author_img->move('author',$author_img_name);
            $data->author_img = $author_img_name;
        }
        $data->save();
        return redirect()->back();
    }

    public function show_book(){
        $book = Book::all();
        return view('admin.show_book',compact('book'));
    }

    public function delete_book($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->back()->with('message','Book has Deleted Successfully');
    }

}
