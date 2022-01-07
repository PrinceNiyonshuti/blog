<x-drop-down>
    {{-- Trigger --}}
    <x-slot name="trigger">
        <button
            class="py-2 pl-3 pr-9d text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">

                {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}

                <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                    height="22" viewBox="0 0 22 22">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path fill="#222"
                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                    </g>
                </svg>
        </button>
    </x-slot>

    {{-- Links --}}
    <x-drop-down-item href="/" :active="request()->routeIs('home')">All</x-drop-down-item>

    @foreach ($categories as $category)

        {{-- {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-blue-500 text-white' : '' }} --}}

        {{--
            *first method to use
            <x-drop-down-item href="/categories/{{ $category->slug }}" :active="isset($currentCategory) && $currentCategory->is($category)">
            {{ ucwords($category->name) }}
        </x-drop-down-item> --}}

        {{-- Second way to use request from url --}}
        <x-drop-down-item href="?category={{ $category->slug }}" :active="request()->is('categories/'.$category->slug)">
            {{ ucwords($category->name) }}
        </x-drop-down-item>

    @endforeach
</x-drop-down>
