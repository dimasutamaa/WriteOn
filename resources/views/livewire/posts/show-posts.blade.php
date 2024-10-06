<?php

use Livewire\Volt\Component;
use App\Models\Post;

new class extends Component {
    public function with(): array
    {
        return [
            'featuredPosts' => Post::published()->featured()->latest('published_at')->take(3)->get(),
            'latestPosts' => Post::published()->latest('published_at')->take(9)->get(),
        ];
    }
}; ?>

<div class="mb-10">
    <x-home-section :title="__('Featured Posts')">
        @foreach ($featuredPosts as $post)
            <x-post-card wire:key='{{ $post->id }}' :post="$post" />
        @endforeach
    </x-home-section>

    <hr>

    <x-home-section :title="__('Latest Posts')">
        @foreach ($latestPosts as $post)
            <x-post-card wire:key='{{ $post->id }}' :post="$post" />
        @endforeach
    </x-home-section>
</div>
