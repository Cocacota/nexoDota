@extends('layout')

@section('content')
    <section class="flex flex-col justify-center">
        <h1 class="flex justify-center text-white text-5xl pt-10 pb-10">Posts de {{ $book->title }}</h1>
        @if (count($posts) > 0)
            <div class="grid grid-cols-4 gap-4 p-4">
                @foreach ($posts as $post)
                    <div class="flex flex-col border border-slate-400 p-4 gap-4 bg-red-600 rounded-lg items-center w-full">
                        <h1 class="text-white text-center text-2xl">{{ $post->post_title }}</h1>
                        <div class="flex flex-col w-full">
                            <p class="flex w-full text-white">Comentario: {{ $post->comment }} </p>
                           <!-- <p class="text-white">Calificación: {{ $post->rating }} </p>-->
                            <p class="text-white">Libro: {{ $post->book->title }} </p>
                            <!--<p class="text-white">Categoría: {{ $post->category->name }} </p>-->
                        </div>
                        @if (Auth::check() && Auth::user()->id == $post->user_id)
                            <a href="{{ route('posts.edit', $post->id) }}"
                                class="bg-blue-500 text-white px-4 py-2 rounded">Editar</a>

                                <a href="{{ route('posts.destroy', $post->id) }}"
                                class="bg-blue-500 text-white px-4 py-2 rounded">eliminar</a>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <p class="flex justify-center text-red-500 text-2xl mt-10">No hay posts todavía del libro {{ $book->title }}
            </p>
        @endif
    </section>
@endsection
