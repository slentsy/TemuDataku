<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;

class KatalogController extends Controller
{
    public function showBootcamp()
    {
        $katalog = Katalog::where('kategoriID', 3)->get(); // Bootcamp
        return view('katalog.bootcamp', compact('katalog'));
    }

    public function showPractice()
    {
        $katalog = Katalog::where('kategoriID', 2)->get(); // Practice
        return view('katalog.practice', compact('katalog'));
    }

    public function showMentoring()
    {
        $katalog = Katalog::where('kategoriID', 1)->get(); // Mentoring
        return view('katalog.mentoring', compact('katalog'));
    }
}
