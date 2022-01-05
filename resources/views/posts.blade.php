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


<x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'yes':'' }}">
            <h1> <a href="/posts/{{ $post->id }}">{!! $post->title !!}</a> </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
