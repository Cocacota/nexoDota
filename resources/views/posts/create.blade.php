@extends('layout')

@section('content')
    <section class="flex flex-col justify-center items-center">
        <h1 class="flex justify-center text-white text-4xl pt-10 pb-4">Agregar Post</h1>
        <form class="w-full max-w-lg" method="POST" action="{{ route('posts.store') }}">
            @csrf

            <input type="hidden" name="book_id" value="{{ $book->id }}">
            <!--<input type="hidden" name="category_id" value="{{ $category->id }}">-->
            <div class="mb-4">
                <label class="block text-white" for="post_title">Título del Post: </label>
                <input class="w-full p-2 border border-gray-300 rounded" type="text" id="post_title" name="post_title"
                    required>
            </div>
            
            <div class="mb-4">
                <label class="text-white pr-2" for="comment">Comentario: </label>
                <textarea class="w-full p-2 border border-gray-300 rounded" id="comment" name="comment" required></textarea>
            </div><!--
            <div class="mb-4">
                <label class="text-white pr-2" for="rating">Calificación (1-5): </label>
                <input class="w-full p-2 border border-gray-300 rounded" type="number" id="rating" name="rating"
                    min="1" max="5" required>
            </div>-->
            <div >
                <button class="bg-red-700 text-white p-2 rounded-lg m-6" type="submit">Agregar Post</button>
            </div>

        </form>
    </section>
@endsection
