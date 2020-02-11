<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class PlacticeController extends Controller
{
    public function index()
    {
        if (\Auth::check()) {
            $user = \Auth::user();
     $word = $user->words()->get()->random(1)->first();
    return view('practice.index',[
        'word' => $word,
        ]);
    }
    
}
}
