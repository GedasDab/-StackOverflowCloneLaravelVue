<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoritesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //User can only to stuff when signed in.
    }
    
    public function store(Question $question)
    {
        $question->favorites()->attach(auth()->id());

        if (request()->expectsJson()) {
            return response()->json(null, 204);
        }

        return back();
    }

    public function destroy(Question $question)
    {
        $question->favorites()->detach(auth()->id());

        if (request()->expectsJson()) {
            return response()->json(null, 204);
        }

        return back();
    }
}
