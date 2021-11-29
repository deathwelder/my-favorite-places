<?php

namespace App\Http\Controllers;

//use Request;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Http\Requests\submitRequest;
use Illuminate\Support\Facades\Storage;

class mainController extends Controller
{
    public function places() {
      $places = Place::all();
      return view('places', ['places' => $places]);
    }

    public function create() {
      return view('create');
    }

    public function submit(submitRequest $req) {
        $place = new Place();
        $place->name = $req->input('firstname');
        $place->type = $req->input('user_type');


        $place->save();

        return redirect()->route('places');
    }

    public function info($id) {
      $place = new Place();
      return view('one-place', ['places' => $place->find($id)]);
    }

    public function addPhoto($id) {
      $place = new Place();
      return view('addPhoto');
    }

    public function photo(Request $request) {
      $file = $request->file('image')->store('uploads', 'public');
      Storage::put('file.txt', 'Hello world!');
      return view('photoPlace', ['file' => $file]);
    }
}
