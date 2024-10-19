<?php

use Livewire\Volt\Component;
use App\Models\Category;

new class extends Component {
    public function with(): array
    {
        return [
            'categories' => Category::whereHas('posts', function ($query) {
                $query->published();
            })->take(10)->get(),
        ];
    }
}; ?>

<div>
    <h3 class="mb-3 text-lg font-semibold text-gray-900">Recommended Topics</h3>
    <div class="flex flex-wrap justify-start gap-2 topics">
        @foreach ($categories as $category)
            <button wire:navigate href="{{ route('blog', ['category' => $category->slug]) }}">
                <x-badge md color="{{ $category->color == null ? 'primary' : $category->color }}" label="{{ $category->title }}" />
            </button>
        @endforeach
    </div>
</div>
