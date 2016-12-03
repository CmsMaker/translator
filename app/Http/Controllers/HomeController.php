<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $level = User::where('id', 1)->first();
        if($level->level_id == 2){
          DB::table('users')
              ->where('id', 1)
              ->update([
                  'level_id' => 1]);
            }
        $user = Auth::user();
        return view('page.home')
        ->with('user' , $user);
    }
}
