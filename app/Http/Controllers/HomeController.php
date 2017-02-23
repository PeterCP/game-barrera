<?php

namespace App\Http\Controllers;

use App\Score;
use App\Http\Requests\ScoreRequest;

class HomeController extends Controller
{
    public function get() {
        return view('home');
    }

    public function post(ScoreRequest $request) {
        Score::create($request->all());
        return redirect()->route('home');
    }
}
