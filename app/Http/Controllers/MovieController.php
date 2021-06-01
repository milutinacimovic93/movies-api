<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        return Movie::all();
    }

    public function show($id) {

        $movies = Movie::find($id);
        return $movies;

    }

    public function store(Request $request) {

        return Movie::create($request->all());

    }

    public function update(Request $request, $id) {

        $movie = Movie::where('id',$id)->update($request->all());
        return $movie;

    }

    public function delete($id) {

        $movie = Movie::find($id);
        $movie->delete();

        return $movie;

    }
}
