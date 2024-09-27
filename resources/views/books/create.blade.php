@extends('layout')

@section('content')

<section class="flex flex-col justify-center items-center">
        <h1 class="flex justify-center text-white text-5xl pt-10 pb-10">crear comentario</h1>
        <form action="{{ route('books.store') }}" method="POST" class=" justify-center">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-red-600 text-xl font-bold">Título</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded" id="title" name="title" required>
            </div>
            <!--<div class="mb-4">
                <label for="type" class="text-red-600 pr-2 text-xl font-bold">Tipo</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded" id="type" name="type" required>
            </div>-->
            <!--<div class="mb-4">
                <label for="image" class="block text-red-600 text-xl font-bold">Imagen</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded" id="image" name="image"
                    >
            </div>
            
            <div class="mb-4">
                <label for="author_id" class="text-red-600 pr-2 text-xl font-bold">Autor</label>
                <select class="w-full p-2 border border-gray-300 rounded" id="author_id" name="author_id" required>
                    @foreach($autores as $autor)
                        <option value="{{ $autor->id }}">{{ $autor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="category_id" class="text-red-600 pr-2 text-xl font-bold">categoria</label>
                <select class="w-full p-2 border border-gray-300 rounded" id="category_id" name="category_id" required>
                    @foreach($categoria as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="publication_date" class="text-red-600 pr-2 text-xl font-bold">fecha de publicacion</label>
                <input type="date" class="w-full p-2 border border-gray-300 rounded" id="publication_date" name="publication_date" required>
            </div>
            <div class="mb-4">
                <label for="original_title" class="text-red-600 pr-2 text-xl font-bold">titulo original</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded" id="original_title" name="original_title" required>
            </div>
            <div class="mb-4">
                <label for="pages" class="text-red-600 pr-2 text-xl font-bold">cantida de paginas</label>
                <input type="number" class="w-full p-2 border border-gray-300 rounded" id="pages" name="pages" required>
            </div>-->
            <div class="mb-4">
                <label for="country" class="text-red-600 pr-2 text-xl font-bold">comentario</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded" id="country" name="country" required>
            </div>
            <!--
            <div class="mb-4" >
                <label for="publisher"class="text-red-600 pr-2 text-xl font-bold">publisher</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded" id="publisher" name="publisher" required>
            </div>
-->
            <button type="submit" class="bg-red-700 text-white p-2 rounded-lg m-6" >Guardar</button>
        </form>
</section>
        @endsection