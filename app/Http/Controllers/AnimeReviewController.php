<?php

namespace App\Http\Controllers;

use App\Models\AnimeReview;
use App\Models\Title;
use App\Models\Genre;
use Illuminate\Http\Request;

class AnimeReviewController extends Controller
{
    public function index()
    {
        $anime_reviews = AnimeReview::all();
        return view('anime-reviews.index', [
            'anime_reviews' => $anime_reviews],
        );
    }

    public function create()
    {
        $titles = Title::all();
        $genres = Genre::all();
        return view('anime-reviews.create', [
            'titles' => $titles,
            'genres' => $genres
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'review' => 'required',
            'rating' => 'required|numeric|between:0,10',
            'title_id' => 'required|unique:anime_reviews,title_id',
            'genre_id' => 'required',
        ], [
            'title_id.unique' => 'The anime has already been reviewed.',
            //'image' => 'image|mimes:pdf,jpeg,png,jpg|max:10048',
        ]);

        $validatedData = 
        [
            'review' => $request->review,
            'rating' => $request->rating,
            'title_id' => $request->title_id,
            'genre_id' => $request->genre_id,
        ];

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('prescriptions', 'public');
        //     $validatedData['image'] = $imagePath;
        // }

        $create = AnimeReview::create($validatedData);
        
        if ($create) {
            return redirect()->route('anime-reviews.index')->with('success', 'New review has been added!');
        }

        return redirect()->route('anime-reviews.index')->with('Failed', 'Error creating new review');
    }

    public function show(AnimeReview $anime_review)
    {
        return view('anime-reviews.show', ['anime_review' => $anime_review]);
    }

    public function edit(AnimeReview $anime_review)
    {
        $titles = Title::all();
        $genres = Genre::all();
        return view('anime-reviews.edit', [
            'titles' => $titles,
            'genres' => $genres,
            'anime_review' => $anime_review
        ]);
    }

    public function update(Request $request, AnimeReview $anime_review)
    {
        $rules = [
            'review' => 'required',
            'rating' => 'required|numeric|between:0,10',
            'title_id' => 'required',
            'genre_id' => 'required',
            //'image' => 'required|image|mimes:pdf,jpeg,png,jpg|max:10048',
        ];

        $validatedData = $request->validate($rules);

        // if ($request->hasFile('image')) {
        //     $request->validate([
        //         'image' => 'required|image|mimes:pdf,jpeg,png,jpg|max:10048',
        //     ]);
        //     $imagePath = $request->file('image')->store('prescriptions', 'public');
        //     $validatedData['image'] = $imagePath;
        // }

        $update = AnimeReview::where('id', $anime_review->id)->update($validatedData);

        if ($update) {
            return redirect()->route('anime-reviews.index')->with('success', 'Review has been updated!');
        }

        return redirect()->route('anime-reviews.index')->with('Failed', 'Error updating review');
    }

    public function destroy(AnimeReview $anime_review)
    {
        $delete = AnimeReview::destroy($anime_review->id);

        if ($delete) {
            return redirect()->route('anime-reviews.index')->with('success', 'Review has been deleted!');
        }

        return redirect()->route('anime-reviews.index')->with('Failed', 'Error deleting review');
    }
}
