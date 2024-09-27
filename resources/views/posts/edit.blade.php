@extends('layout')

@section('content')
    <section class="flex flex-col justify-center items-center">
        <h1 class="text-4xl text-white pt-10 pb-4">Editar Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="w-full max-w-lg">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="post_title" class="block text-white">Título del Post:</label>
                <input type="text" name="post_title" id="post_title" value="{{ old('post_title', $post->post_title) }}"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label for="comment" class="block text-white">Comentario:</label>
                <textarea name="comment" id="comment" rows="4" class="w-full p-2 border border-gray-300 rounded">{{ old('comment', $post->comment) }}</textarea>
            </div>
        <!--
            <div class="mb-4">
                <label for="rating" class="block text-white">Calificación:</label>
                <input type="number" name="rating" id="rating" value="{{ old('rating', $post->rating) }}"
                    min="1" max="5" class="w-full p-2 border border-gray-300 rounded">
            </div>
-->
            <div >
                <button type="submit" class="bg-red-700 text-white p-2 rounded-lg m-6">Actualizar</button>
            </div>
        </form>
    </section>
@endsection
