<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
            return redirect()->route('verify');
        }else{
            return view('home');
        }
    }

    public function verify(){
        return view('pages.profile.add_info');
    }

    public function insert_info(Request $request){
        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'mobile' => 'required',
            'birthdate' => 'required',
            'course' => 'required',
            'image' => 'required|image',
            'department' => 'required',
            'cor' => 'required|file'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

}
