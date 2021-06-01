<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MoviesRequest;
class MovieController extends Controller
{
    public function index() {
        return Movie::all();
    }

    public function show($id) {

        $movies = Movie::find($id);
        return $movies;

    }

    public function store(MoviesRequest $request) {

        info('test');
        return Movie::create($request->all());

    }

    public function update(MoviesRequest $request, $id) {

        Movie::where('id',$id)->update($request->validate());

    }

    public function delete($id) {

        $movie = Movie::find($id);
        $movie->delete();

        return $movie;

    }
}
