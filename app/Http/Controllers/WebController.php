<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Snack;

class WebController extends Controller
{
    public function home()
    {
        $snacks = Snack::take(3)->get();
        return view('pages.home', compact('snacks'));
    }

    public function products()
    {
        $snacks = Snack::all();
        return view('pages.products', compact('snacks'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function show($id)
    {
        $snack = Snack::findOrFail($id);
        return view('pages.show', compact('snack'));
    }
}