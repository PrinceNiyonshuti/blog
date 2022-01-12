@auth
    <form method="POST" action="/posts/{{ $post->slug }}/comments"  class="border border-gray-200 p-6 rounded-xl">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/100?id={{ auth()->id() }}" alt="user" width="50" height="50" class="rounded-full">

            <h2 class="ml-4">Want to particapte</h2>
        </header>
        <div class="mt-6">
            <textarea
                class="w-full text-sm focus:outline-none focus::ring"
                name="body" id="body" rows="5"
                placeholder="show some love" required
            ></textarea>

            @error('body')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>


        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 pt-6">
            <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-700">Post</button>
        </div>
    </form>
@else
    <a href="/register" class="hover:underline"> Register </a>
    or
    <a href="/login" class="hover:underline"> Login</a>
    to leave a comment
@endauth
