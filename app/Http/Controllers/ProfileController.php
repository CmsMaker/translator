<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;

class ProfileController extends Controller
{
  public function edit_page(){
    $user = Auth::user();
    $words = DB::select('select * from words');
    return view('page.edit_page')
    ->with('user' , $user)
    ->with('words' , $words);
  }

  public function edit_username(Request $request){
    $new_username = $request->input('username');
    $old_username = Auth::user()->name;
    if($new_username){
      DB::table('users')
            ->where('name', $old_username)
            ->update(['name' => $new_username ]);
    }

    return redirect()
    ->route('homepage');
  }

  public function edit_email(Request $request){
    $new_email = $request->input('email');
    $old_email = Auth::user()->email;
    if($new_email){
      DB::table('users')
            ->where('email', $old_email)
            ->update(['email' => $new_email ]);
    }

    return redirect()
    ->route('homepage');
  }
}
