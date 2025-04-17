<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json([
            'status' => true,
            'data' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'stock' => 'required|integer|min:0'
        ]);

        $book = Book::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Book created successfully',
            'data' => $book
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        return response()->json([
            'status' => true,
            'data' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'stock' => 'required|integer|min:0'
        ]);

        $book->update($request->all());

        return response([
            'status' => true,
            'message' => 'Bood updated successfully',
            'data' => $book
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();

        return response()->json([
        'status' => true,
        'message' => 'Book deleted successfully'
        ]);
    }
}
