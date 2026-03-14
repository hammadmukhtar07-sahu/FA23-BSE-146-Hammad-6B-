<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

// Show all books
public function index()
{
    $books = Book::paginate(8);
    return view('books.index', compact('books'));
}

// Show create form
public function create()
{
    return view('books.create');
}


// Store new book
public function store(Request $request)
{

$request->validate([
'title' => 'required|max:255',
'author' => 'required|max:255',
'category' => 'required|max:255',
'isbn' => 'required|max:100',
'published_year' => 'required|numeric',
'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
]);

$imageName = null;

if($request->hasFile('image')){
$imageName = $request->file('image')->store('books','public');
}

Book::create([
'title' => $request->title,
'author' => $request->author,
'category' => $request->category,
'isbn' => $request->isbn,
'published_year' => $request->published_year,
'status' => 'available',
'image' => $imageName
]);

return redirect()->route('books.index')
->with('success','Book Added Successfully');

}


// Show single book
public function show($id)
{
$book = Book::findOrFail($id);
return view('books.show',compact('book'));
}


// Show edit form
public function edit($id)
{
$book = Book::findOrFail($id);
return view('books.edit',compact('book'));
}


// Update book
public function update(Request $request,$id)
{

$request->validate([
'title' => 'required|max:255',
'author' => 'required|max:255',
'category' => 'required|max:255',
'isbn' => 'required|max:100',
'published_year' => 'required|numeric'
]);

$book = Book::findOrFail($id);

$imageName = $book->image;

if($request->hasFile('image')){
    $image = $request->file('image');
    $imageName = time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('book_images'), $imageName);
}

$book->update([
'title' => $request->title,
'author' => $request->author,
'category' => $request->category,
'isbn' => $request->isbn,
'published_year' => $request->published_year,
'image' => $imageName
]);

return redirect()->route('books.index')
->with('success','Book Updated Successfully');

}


// Delete book
public function destroy($id)
{

$book = Book::findOrFail($id);

if($book->image && file_exists(storage_path('app/public/books/'.$book->image)))
{
unlink(storage_path('app/public/books/'.$book->image));
}

$book->delete();

return redirect()->route('books.index')
->with('success','Book Deleted Successfully');

}

}