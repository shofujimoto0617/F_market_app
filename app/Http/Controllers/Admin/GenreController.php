<?php

namespace App\Http\Controllers\Admin;
use App\Models\Genre;
use App\Enums\IsActive;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class GenreController extends Controller
{
    public function Genre() {
        $genres = Genre::all();
        $status = IsActive::toSelectArray();
        return view('admin.genre.genre_view', compact('status', 'genres'));


    }

    public function GenreCreate(Request $request) {
        Genre::insert([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.genre')->with('success', 'Genre Created Successfull');
    }
}
