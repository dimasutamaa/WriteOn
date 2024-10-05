<x-app-layout>
    <x-hero />

    <div class="py-2">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-10">
                <div class="mb-16">
                    <h2 class="mt-5 mb-5 text-3xl font-bold text-grey-500">Featured Posts</h2>
                    <div class="w-full">
                        <div class="grid w-full grid-cols-3 gap-10">
                            {{-- Posts --}}
                            <article class="overflow-hidden bg-white border border-gray-100 rounded-lg shadow-sm">
                                <img
                                alt=""
                                src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                class="object-cover w-full h-56"
                                />
                            
                                    <div class="p-4 sm:p-6">
                                    <a href="#">
                                        <h3 class="text-lg font-medium text-gray-900">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </h3>
                                    </a>
                                
                                    <a href="#" class="inline-flex items-center gap-1 mt-4 text-sm font-medium text-blue-600 group">
                                        Find out more
                                
                                        <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                        &rarr;
                                        </span>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <a class="block mt-10 text-lg font-semibold text-center text-grey-500" href="#">More
                        Posts</a>
                </div>
                <hr>

                <div class="w-full mb-5">
                    <h2 class="mt-16 mb-5 text-3xl font-bold text-grey-500">Latest Posts</h2>
                    <div class="grid w-full grid-cols-3 gap-10 gap-y-32">
                        {{-- Posts --}}
                        <article class="overflow-hidden bg-white border border-gray-100 rounded-lg shadow-sm">
                            <img
                            alt=""
                            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="object-cover w-full h-56"
                            />
                        
                                <div class="p-4 sm:p-6">
                                <a href="#">
                                    <h3 class="text-lg font-medium text-gray-900">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </h3>
                                </a>
                            
                                <a href="#" class="inline-flex items-center gap-1 mt-4 text-sm font-medium text-blue-600 group">
                                    Find out more
                            
                                    <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                    &rarr;
                                    </span>
                                </a>
                            </div>
                        </article>
                    </div>
                    <a class="block mt-10 text-lg font-semibold text-center text-grey-500" href="#">More
                        Posts</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>