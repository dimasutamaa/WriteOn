@props(['post'])

<article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="grid items-start grid-cols-12 gap-3 mt-5 article-body">
        <div class="flex items-center col-span-4 article-thumbnail">
            <a href="#">
                <img class="mx-auto mw-100 rounded-xl" src="{{ $post->getThumbnailImage() }}" alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="flex items-center py-1 text-sm article-meta">
                <span class="mr-1 text-sm font-semibold">By {{ $post->author->name }}</span>
                <span class="text-xs text-gray-500">- {{ $post->published_at->diffForHumans() }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a href="#">
                    {{ $post->title }}
                </a>
            </h2>

            <p class="mt-2 text-base font-light text-gray-700">
                {!! Str::limit($post->body, 150) !!}
            </p>
            <div class="flex items-center justify-between mt-6 article-actions-bar">
                <div class="flex gap-x-2">
                    @foreach ($post->categories as $category)
                        <button wire:navigate href="{{ route('blog', ['category' => $category->slug]) }}">
                            <x-badge md color="{{ $category->color == null ? 'primary' : $category->color }}"
                                label="{{ $category->title }}" />
                        </button>
                    @endforeach
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-500">{{ $post->getReadingTime() }} min read</span>
                    </div>
                </div>
                <div>
                    <livewire:posts.likebutton :key="$post->id" :$post />
                </div>
            </div>
        </div>
    </div>
</article>
