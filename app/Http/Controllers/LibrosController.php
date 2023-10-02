<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    //
    public function store(Request $request)
    {
        $libro = new libros();
        $libro->title = $request->input('title');
        $libro->author = $request->input('author');
        $libro->editorial = $request->input('editorial');
        $libro->genre = $request->input('genre');
        $libro->publication_date = $request->input('publication_date');

        $libro->save();

        return redirect()->route('libros.index');
    }

    public function index()
    {
        $libros = libros::all();

        return view('libros.index', compact('libros'));
    }
}
