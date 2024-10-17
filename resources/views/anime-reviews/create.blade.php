<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Anime Review') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('anime-reviews.store') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <x-input-label for="title" value="Title" />
                            <select id="title"
                            name="title_id" class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @foreach ($titles as $title)
                            <option value="{{ $title->id }}">{{ $title->name }}</option>
                            @endforeach
                            <x-input-error class="mt-2" :messages="$errors->get('title_id')" />
                            </select>
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
                                autofocus>{{ $anime_review->rating ?? old('rating') }}</x-text-input>
                            <x-input-error class="mt-2" :messages="$errors->get('rating')" />
                        </div>

                        <div class="flex items-center gap-4" type="button" >
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
