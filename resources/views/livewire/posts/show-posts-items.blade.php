<?php

use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use App\Models\Post;
use App\Models\Category;

new class extends Component {
    use WithPagination;

    #[Url]
    public $sort = 'desc';

    #[Url]
    public $search = '';
    
    #[Url]
    public $category = '';

    public function setSort($sort)
    {
        $this->sort = $sort === 'desc' ? 'desc' : 'asc';
    }

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

    public function with(): array
    {
        return [
            'posts' => Post::published()
                ->orderBy('published_at', $this->sort)
                ->when(Category::where('slug', $this->category)->first(), function ($query) {
                    $query->withCategory($this->category);
                })
                ->where('title', 'like', "%{$this->search}%")
                ->paginate(5),
        ];
    }
}; ?>

<div class="px-3 py-6 lg:px-7">
    <div class="flex items-center justify-between border-b border-gray-100">
        <div class="flex items-center space-x-4 font-light ">
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
