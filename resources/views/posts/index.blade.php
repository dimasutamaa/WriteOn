<x-app-layout>
    <div class="py-4">
        <div class="mx-auto max-w-7xl">
            <div class="grid w-full grid-cols-4 gap-10">
                <div class="col-span-4 md:col-span-3">
                    <livewire:posts.show-posts-items />
                </div>
                <div class="sticky top-0 h-screen col-span-4 px-3 py-6 pt-10 space-y-10 border-t border-gray-100 border-t-gray-100 md:border-t-none md:col-span-1 md:px-6 md:border-l">
                    <livewire:posts.search-box />
                    <livewire:posts.categories-box />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
