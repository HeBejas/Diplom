<?php

namespace App\Http\Controllers;
use App\Models\Suit;

use Illuminate\Http\Request;

class SuitController extends Controller
{
    public function suit()
    {
        $suits = Suit::query()->limit(5)->get();
        return view('index', ['suits' => $suits]);
    }
}
