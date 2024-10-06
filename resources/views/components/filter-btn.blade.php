@props(['active'])

@php
    $classes = ($active ?? false)
            ? 'font-medium text-gray-900 border-b-2 border-indigo-700 py-2'
            : 'text-gray-500 hover:border-b-2 border-gray-300 py-2';
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
