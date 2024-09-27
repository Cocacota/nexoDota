<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list(Request $request)
    {
        $autor_id = $request->input('autor_id', '');
        $id_category = $request->input('id_category', '');
        $query = Book::query();

        if ($autor_id) {
            $query->where('author_id', $autor_id);
        }

        if ($id_category) {
            $query->where('category_id', $id_category);
        }

        $books = $query->get();
        $autor = Author::all();
        $category = Category::all();

        return view('books.list', compact('books', 'autor', 'category'));
    }

    public function showPosts($book_id)
    {
        $book = Book::findOrFail($book_id);
        $posts = Post::where('book_id', $book_id)->get();
        return view('books.show_posts', compact('book', 'posts'));
    }

    public function create()
    {
        $categoria = Category::all();
        $autores = Author::all();
        return view('books.create', compact('categoria', 'autores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            
            
            'title' => 'required|string',
            
            
            
            
            
            'country' => 'required|string',
            
        ]);

        Book::create($request->all());

        return redirect()->route('books.list');
    }
}
