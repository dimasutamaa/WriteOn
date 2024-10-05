@props(['title'])

<div class="mb-16">
    <h2 class="mt-5 mb-5 text-3xl font-bold text-gray-500">{{ $title }}</h2>
    <div class="w-full">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
            {{ $slot }}
        </div>
    </div>
    <a class="block mt-10 text-lg font-semibold text-center text-gray-500 hover:underline underline-offset-4" href="#">More Posts</a>
</div>
