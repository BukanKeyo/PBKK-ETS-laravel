<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Anime Review') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900 ">
                            {{ 'Title' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 ">
                            {{ $anime_review->title->name }}
                        </p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900 ">
                            {{ 'Genre' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 ">
                            {{ $anime_review->genre->name }}
                        </p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900 ">
                            {{ 'Review' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 ">
                            {{ $anime_review->review }}
                        </p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900 ">
                            {{ 'Rating' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600  ">
                            {{ $anime_review->rating }}/10
                        </p>
                    </div>
                    
                    <!-- <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900 ">
                            {{ 'Image' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            <img class="h-64 w-128" src="{{ asset('storage/' . $anime_review->image) }}" alt="{{ $anime_review->name }}" srcset="">
                        </p>
                    </div> -->

                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900  ">
                            {{ 'Created At' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 ">
                            {{ $anime_review->created_at }}
                        </p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900  ">
                            {{ 'Updated At' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600  ">
                            {{ $anime_review->updated_at }}
                        </p>
                    </div>
                    <a href="{{ route('anime-reviews.index') }}" class="bg-black text-white px-4 py-2 rounded-md">BACK</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
