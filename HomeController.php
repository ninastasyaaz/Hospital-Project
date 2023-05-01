<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('salmon.home');
            }

            else
            {
                return view('sushi.home');
            }
        }

        else
        {
            return redirect()->back();
        }

    }


    public function index()
    {
        return view('sushi.home');
    }
}
