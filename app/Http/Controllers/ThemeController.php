<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Theme;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ThemeController extends Controller
{
    public function index()
    {
    }

    public function show()
    {
    }

    public function answer()
    {
    }

    public function result()
    {
    }

    public function create()
    {
        return view('themes.create');
    }

    public function store(Request $request, Auth $user)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'answer_a' => 'required|string|max:255',
            'pic_a' =>
            'image|max:1024|mimes:jpeg,png,jpg,gif',
            'answer_b' => 'required|string|max:255',
            'pic_b' =>
            'image|max:1024|mimes:jpeg,png,jpg,gif',
        ]);

        $theme = new Theme;
        $theme->user_id = $request->$user->id;
        $theme->title = $request->input('title');
        $theme->answer_a = $request->input('answer_a');
        $theme->pic_a = $request->input('pic_a');
        $theme->answer_b = $request->input('answer_b');
        $theme->pic_b = $request->input('pic_b');
        $theme->save();
        return redirect()->route('home');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
