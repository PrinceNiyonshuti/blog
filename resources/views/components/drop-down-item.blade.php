@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white';
    if($active) $classes .= ' text-white bg-blue-500';
@endphp

<a  {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>
