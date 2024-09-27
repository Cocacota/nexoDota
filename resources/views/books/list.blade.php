@extends('layout')

@section('content')
    <section class="flex flex-col justify-center items-center">
        <h1 class="flex justify-center text-white text-5xl pt-10 pb-10">posteos</h1>
        <div class="flex justify-center items-center gap-2">
             <!--<x-dropdown class="">
               <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div>
                            Categorias
                        </div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('books.list', array_merge(request()->all(), ['id_category' => '']))">
                        sin filtro
                    </x-dropdown-link>
                    @foreach ($category as $cate)
                        <x-dropdown-link :href="route('books.list', array_merge(request()->all(), ['id_category' => $cate->id]))">
                            {{ $cate->name }}
                        </x-dropdown-link>
                    @endforeach
                </x-slot>
            </x-dropdown>
            
            <x-dropdown class="">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div>
                            Autores
                        </div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('books.list', array_merge(request()->all(), ['autor_id' => '']))">
                        sin filtro
                    </x-dropdown-link>
                    @foreach ($autor as $au)
                        <x-dropdown-link :href="route('books.list', array_merge(request()->all(), ['autor_id' => $au->id]))">
                            {{ $au->name }}
                        </x-dropdown-link>
                    @endforeach
                </x-slot>
            </x-dropdown>-->
        </div>
        <div class="flex gap-4 mb-10 mt-5">
            <button class="bg-red-700 text-white p-2 rounded-lg">
                <a class="btn btn-primary" href="{{ route('books.create') }}">
                    posteo Nuevo
                </a>
            </button>
            <!--
            <button class="bg-red-700 text-white p-2 rounded-lg">
                <a class="btn btn-primary" href="{{ route('categories.create') }}">
                    Nueva Categoria
                </a>
            </button>
            <button class="bg-red-700 text-white p-2 rounded-lg">
                <a class="btn btn-primary" href="{{ route('author.create') }}">
                    Añadir Autor
                </a>
            </button>
-->
        </div>
        <div class="grid grid-cols-4 gap-4 p-4">
            @foreach ($books as $book)
                <div class="flex flex-col border border-black p-4 gap-4 rounded-lg bg-red-600">
                    <div class="h-16 w-full">
                        <h1 class="text-white text-center text-2xl font-bold">{{ $book->title }}</h1>
                    </div>
                    
                    <p class="text-white font-bold"> {{ $book->country }}</p>

                    <!--<button class="bg-blue-500 text-white p-2 rounded-lg">
                        <a href="{{ route('posts.create', ['book_id' => $book->id]) }}"
                            class="btn btn-primary">Agregar comentario</a>
                    </button>
                    <button class="bg-blue-500 text-white p-2 rounded-lg">
                        <a href="{{ route('books.show_posts', ['book_id' => $book->id]) }}" class="btn btn-primary">Ver
                            Posts</a>
                    </button>-->
                </div>
            @endforeach
        </div>
    </section>
@endsection
