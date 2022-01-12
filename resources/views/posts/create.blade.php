<x-layout>
    <section class="py-8 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">Publish New Post</h1>
        <form action="/admin/post" method="POST" class="border border-gray-200 p-6 rounder-xl" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Thumbnail
                </label>
                <input class="border border-gray-400 p-2 w-full" type="file" name="thumbnail" id="thumbnail" value="{{ old('thumbnail') }}"  required>
                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Title
                </label>
                <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" value="{{ old('title') }}"  required>
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Slug
                </label>
                <input class="border border-gray-400 p-2 w-full" type="text" name="slug" id="slug" value="{{ old('slug') }}"  required>
                @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Excerpt
                </label>
                <textarea
                    class="border border-gray-400 p-2 w-full"
                    name="excerpt" id="excerpt"
                    required>{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Body
                </label>
                <textarea
                    class="border border-gray-400 p-2 w-full"
                    name="body" id="body"
                    required>{{ old('body') }}</textarea>
                @error('body')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Category
                </label>
                <select name="category_id" id="category_id">

                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id' == $category->id ? 'selected' : '') }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach

                </select>
                @error('category_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-700">Publish</button>
            </div>

        </form>
    </section>
</x-layout>
