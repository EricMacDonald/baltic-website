<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('site-pages.home', compact('user'));
    }

    public function viewAboutUs(){
        $user = Auth::user();
        return view('site-pages.about-us', compact('user'));
    }

    public function viewHowTo(){
        $user = Auth::user();
        return view('site-pages.how-to', compact('user'));
    }

    public function viewSuggestions(){
        $user = Auth::user();
        return view('site-pages.suggestions', compact('user'));
    }

    public function viewTopTrumps(){
        $user = Auth::user();
        return view('site-pages.top-trumps', compact('user'));
    }
}
