<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
class mainController extends Controller
{
    public function places() {
      $places = Place::all();
      return view('places', ['places' => $places]);
    }

    public function create() {
      return view('create');
    }
}
