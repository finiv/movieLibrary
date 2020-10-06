<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Returns all genres
     * @return Genre[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Genre::all()->pluck('name');
    }
}
