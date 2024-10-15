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
                        enctype="multipart/form-data" class="mt-6 space-y-6">
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
                    
                    <!-- <div>
                        <x-input-label for="title" value="Title" />
                        <x-textarea-input id="title" name="title" class="mt-1 block w-full" required
                        autofocus>{{ $anime_review->title ?? old('title') }}</x-textarea-input>
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div> -->

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
                        
                        <!-- <div>
                            <x-input-label for="image" value="Image" />
                            <label class="block mt-2">
                                <span class="sr-only">Choose image</span>
                                <input type="file" id="image" name="image"
                                    class="block w-full text-sm text-slate-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-violet-50 file:text-violet-700
                                    hover:file:bg-violet-100
                                " />
                            </label>
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div> -->

                        <div class="flex items-center gap-4" type="button" >
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
