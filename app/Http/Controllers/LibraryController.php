<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Book;

class LibraryController extends Controller
{

    public function index()
    {
        $books = Book::paginate(8);
        foreach($books as $book){
            if (strlen($book->title) < 11 ? $temp = $book->title :  $temp = substr($book->title, 0, 10).'...');
            $book->title = $temp;
           // $book->title = strlen($book->title);
        }
        return view('library.index', compact('books'));
    }

    public function add()
    {

        return view ('library.add');
    }

    public function save(Request $request)
    {
        //1.
       Book::create($request->all());
        //2.
//        $book = new Book();
//        $book->author = $request->input('author');
//        $book->title = $request->input('title');
//        $book->save();
        return redirect('/');
    }

    public function edit($id)
    {
        $book = Book::find($id);

        return view('library.edit',compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->author = $request->input('author');
        $book->title = $request->input('title');
        $book->update();
        return redirect('/');

    }

    public function delete($id)
    {
        //Book::where('id', $id)->delete();
        Book::find($id)->delete();
        return redirect('/');
    }



}
