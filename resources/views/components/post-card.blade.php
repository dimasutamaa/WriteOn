@props(['post'])

<article class="overflow-hidden bg-white border border-gray-100 rounded-lg shadow-sm">
    <img src="{{ $post->getThumbnailImage() }}" class="object-cover w-full h-56" />

    <div class="p-4 sm:p-6">
        <a href="#">
            <h3 class="text-lg font-medium text-gray-900">
                {{ $post->title }}
            </h3>
        </a>

        <div class="flex flex-col items-start mt-2 text-sm text-gray-500 lg:flex-row lg:items-center">
            <p>By {{ $post->author->name }}</p>
            <p class="hidden mx-2 lg:block">-</p>
            <p>{{\Carbon\Carbon::parse($post->published_at)->format('jS \\ F Y') }}</p>
        </div>

        <a href="#" class="inline-flex items-center gap-1 mt-4 text-sm font-medium text-blue-600 group">
            Find out more
            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">&rarr;</span>
        </a>
    </div>
</article>
