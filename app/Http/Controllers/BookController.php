<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //all function in the controller are public by defualt
    function books()
    {
        return view('iti/iti');
    }

    function booksList()
    {
        $books = Book::all();
        return view('iti/booklist', ["books" => $books]);
    }

    function booksAdd()
    {
        return view('iti/addbook');
    }

    function booksId($id)
    {
        $books = Book::findorfail($id);
        return view("iti/book", ["book" => $books]);

    }

    function booksStore()
    {
        $data = request();
        $bkname = request('bookname');
        $bkdesc = request('bookdescription');
        $bkimg = $bkname . '-' . date('d-m-Y-H:i') . '.' . $data->file('bookimg')->extension();
        $bkprice = request('bookprice');
        $bkinstock = request('bookinstock');
        if ($bkinstock) {
            $bkinstock = true;
        } else {
            $bkinstock = false;
        }
        $bk = new Book();
        $bk->name = $bkname;
        $bk->description = $bkdesc;
        $bk->img = "storage/images/" . $bkimg;
        $bk->price = $bkprice;
        $bk->instock = $bkinstock;
        $bk->save();
        if ($data->hasFile('bookimg')) {
            $bk->img = $data->bookimg->storeAs('public/images', $bkimg);
        }

        return redirect()->route("books.list");
    }

    function booksDestroy($id)
    {
        $bk = Book::findorfail($id);
        $bk->delete();
        return redirect()->route("books.list");
    }

    function booksEdit($id)
    {
        $bk = Book::findorfail($id);
        return view('iti.editbook', ['book' => $bk]);
    }

    function booksUpdate($id)
    {
        $data = request();
        $bk = Book::findorfail($id);
        $bkname = request('bookname');
        $bkdesc = request('bookdescription');
        $bkprice = request('bookprice');
        $bkinstock = request('bookinstock');
        if ($bkinstock) {
            $bkinstock = true;
        } else {
            $bkinstock = false;
        }
        if ($data->hasFile('bookimg')) {
            $bkimg = $bkname . '-' . date('d-m-Y-H:i') . '.' . $data->file('bookimg')->extension();
            $bk->img = $data->bookimg->storeAs('public/images', $bkimg);
            $bk->img = "storage/images/" . $bkimg;
        } else {
            $bkimg = request('path');
            $bk->img = $bkimg;
        }
        $bk->name = $bkname;
        $bk->description = $bkdesc;
        $bk->price = $bkprice;
        $bk->instock = $bkinstock;
        $bk->save();
        return redirect()->route("books.book", $id);
    }
//    function getbook($name)
//    {
////        $books = ["linux" => ["id" => 1, "name" => "linuxbook", "description" => "linux 101", "img" => "linux.jpeg"],
////            "html" => ["id" => 2, "name" => "htmlbook", "description" => "html for starters", "img" => "html.png"],
////            "css" => ["id" => 3, "name" => "cssbook", "description" => "css styles", "img" => "css.jpeg"],
////            "js" => ["id" => 4, "name" => "jsbook", "description" => "ls scripts", "img" => "js.png"]];
//        $books = Book::all();
//        foreach ($books as $k => $b) {
//            if ($k == $name) {
//                return view("iti/book", ["mybook" => $books[$name]]);
//            }
//        }
//    }
//public function getbookslist(Request $request)
//    {
//        if ($request->ajax()) {
//            $data = Book::latest()->get();
//            return Datatables::of($data)
//                ->addIndexColumn()
//                ->addColumn('action', function($row){
//                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
//                    return $actionBtn;
//                })
//                ->rawColumns(['action'])
//                ->make(true);
//        }
//    }
}
