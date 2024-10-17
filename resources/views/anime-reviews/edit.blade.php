<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Your Anime Review') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('anime-reviews.update', $anime_review->id) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="title" value="Title" />
                            <p class="mt-1 text-sm text-gray-600">
                                {{ $anime_review->title->name }}
                            </p>
                            <input type="hidden" name="title_id" value="{{ $anime_review->title_id }}">
                        </div>
                        
                        <div>
                            <x-input-label for="genre" value="Genre" />
                            <select id="genre"
                                name="genre_id" class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-input-label for="review" value="Review" />
                            <x-textarea-input id="review" name="review" class="mt-1 block w-full" required
                                autofocus>{{ $anime_review->review ?? old('review') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('review')" />
                        </div>

                        <div>
                            <x-input-label for="rating" value="Rating" />
                            <x-text-input id="rating" name="rating" class="mt-1 block w-full"
                            autofocus value="{{ $anime_review->rating ?? old('rating') }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('rating')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
