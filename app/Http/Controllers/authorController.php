<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class authorController extends Controller
{
    public function create(){
        return view('author.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|string',
            'nationality'=>'required|string',
            'birth_date'=>'required|date'
        ]);
        Author::create($request->all());

        return redirect()->route('books.list');
    }
}
