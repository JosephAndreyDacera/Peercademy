<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Retrieve the currently authenticated user's ID...
        $id = Auth::id();

        $result = DB::table('users')
                ->select('role') // Specify the attribute you want to retrieve
                ->where('id', $id) // Add any necessary conditions
                ->first(); // Retrieve the first matching row

        if ($result->role == 0) {
            return view('pages.profile.add_info');
        }else{
            return view('home');
        }
    }

}
