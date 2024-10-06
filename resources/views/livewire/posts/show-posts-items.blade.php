<?php

use Livewire\Attributes\Url;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use App\Models\Post;

new class extends Component {
    use WithPagination;

    #[Url]
    public $sort = 'desc';

    public function setSort($sort)
    {
        $this->sort = $sort === 'desc' ? 'desc' : 'asc';
    }

    public function with(): array
    {
        return [
            'posts' => Post::published()
                ->orderBy('published_at', $this->sort)
                ->paginate(5),
        ];
    }
}; ?>

<div class="px-3 py-6 lg:px-7">
    <div class="flex items-center justify-between border-b border-gray-100">
        <div id="filter-selector" class="flex items-center space-x-4 font-light ">
            <x-filter-btn :active="$sort === 'desc'" wire:click="setSort('desc')">
                {{ __('Latest') }}
            </x-filter-btn>

            <x-filter-btn :active="$sort === 'asc'" wire:click="setSort('asc')">
                {{ __('Oldest') }}
            </x-filter-btn>
        </div>
    </div>

    <div class="py-4">
        @foreach ($posts as $post)
            <x-post-item wire:key='{{ $post->id }}' :post="$post" />
        @endforeach
    </div>

    <div class="my-3">
        {{ $posts->links() }}
    </div>
</div>
