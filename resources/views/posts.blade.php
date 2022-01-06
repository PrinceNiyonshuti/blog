{{-- @extends('layout')

@section('banner')
    <h1>My Blogs</h1>
@endsection

@section('content')

    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'yes':'' }}">
            <h1> <a href="/posts/{{ $post->slug }}">{{$post->title}}</a> </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach

@endsection --}}


{{-- <x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'yes':'' }}">
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h1>
            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
            </p>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout> --}}
<x-layout>
        @include('_post-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            @if ($posts->count())
                <x-post-grid :posts="$posts"/>
            @else
                <p class="text-center">No post yet , please check back later .</p>
            @endif
            
        </main>
</x-layout>
