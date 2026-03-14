<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BorrowedBook;
use App\Models\Book;
use App\Models\Member;

class BorrowedBookController extends Controller
{

public function create()
{

$members = Member::all();
$books = Book::where('status','available')->get();

return view('borrowed.create',compact('members','books'));

}


public function store(Request $request)
{

BorrowedBook::create($request->all());

Book::where('id',$request->book_id)
->update(['status'=>'borrowed']);

return redirect('/')->with('success','Book Borrowed Successfully');

}

}