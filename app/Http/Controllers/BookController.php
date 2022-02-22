<?php

namespace App\Http\Controllers;

use App\Models\Book;
use app\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BookController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $booksList = Book::all();
        return view('books.index', compact('booksList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $table->string('name');
        // $table->string('amazon_link');
        // $table->dateTime('published');
        // $table->string('image');
        // $table->text('description');
        // $table->decimal('price', $precision = 8, $scale = 2);
        // $request->validate([
        //     'title' => 'required|min:2|max:255',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        // ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $imageDestinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $input['image'] = "$postImage"; // $input['image'] = "20221502.jpeg";
        }
        Book::create($input);
        return redirect()->route('books.index')->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {

        // $booksList = DB::table("books")
        // ->join("reviews", "books.id","=", "reviews.book_id")
        // ->join("readers", "reviews.reader_id","=", "reader.id")
        // ->select("readers.name as readerName", "reviews.comment")
        // ->get();
        // $reviews = $book->reviews;
        // var_dump($reviews);
        // die();
        return view('books.show', compact(['book']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
