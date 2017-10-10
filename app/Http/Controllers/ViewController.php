<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('profile.view')
            ->withUser($user);
    }
        
    public function edit()
    {
        $profile = Auth::user();
        return view('profile.edit')->withInfo($profile);
    }

    protected function delete($id)
    {
        $user = Post::find($id);
        $user->delete();

        return view('home');
    }
}
