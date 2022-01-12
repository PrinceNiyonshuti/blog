@props(['comment'])
<article class="flex border border-gray-200 bg-gray-50 p-6 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/100?id={{ auth()->id() }}" alt="user" width="60" height="60" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">Poster <time>{{ $comment->created_at->format('F j, Y , g:i a') }}</time> </p>
        </header>
        <p>
            {{ $comment->body }}
        </p>
    </div>
</article>
