<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\helper;
use App\Word;
use DB;
use App\User;
use Mail;


class DictionaryController extends Controller
{

    public function add_word_get(){
        $user = Auth::user();
        return view('page.addword-E-P')
        ->with('user' , $user);
    }

    public function add_word_post(Request $request){
      $en_word = $request->input('english');
      $pe_word = $request->input('persian');

      if((bool)Word::where(['pe_word' => $pe_word ,'en_word'=> $en_word ])->count()){
        return redirect()
        ->route('add_word');
      }

      Word::create([
          'pe_word' => $pe_word,
          'en_word' => $en_word
      ])->save();

      return redirect()
      ->route('add_word');

    }


    public function see_user(){
      $user = Auth::user();
      $users = DB::select('select * from users');
      return view('page.seeusers')
      ->with('user' , $user)
      ->with('users' , $users);
    }

    public function see_admin(){
        $user = Auth::user();
        return view('page.addadmin')
        ->with('user' , $user);
    }

    public function see_dictionary(){
        $user = Auth::user();
        $words = DB::select('select * from words');
        return view('page.dictionary-E-P')
        ->with('user' , $user)
        ->with('words' , $words);
    }

    public function invite_user_get(){
        $user = Auth::user();
        return view('page.inviteusers')
        ->with('user' , $user);
    }

    public function invite_user_post(Request $request){
        $email_address = $request->input('email');

        $email = Mail::send('email', [], function ($message)use($email_address) {

            $message->from('se.hmahjobi.1373@gmail.com', 'Admin');

            $message->to($email_address)->subject('Invite to Translator');

        });

      $user = Auth::user();
      $words = DB::select('select * from words');
      return view('page.home')
      ->with('user' , $user)
      ->with('words' , $words);
    }

    public function report(){
        $user = Auth::user();
        $count_users = Word::count();
        $count_words = User::count();;
        return view('page.report')
        ->with('user' , $user)
        ->with('count_users' , $count_users)
        ->with('count_words' , $count_words);
    }

    public function delete_word($id){
      Word::where(['id'=>$id])->delete();
      $user = Auth::user();
      $words = DB::select('select * from words');
      return view('page.dictionary-E-P')
      ->with('user' , $user)
      ->with('words' , $words);

    }

    public function delete_user($id){
      if($id == Auth::user()->id){
          User::where(['id'=>$id])->delete();
          $user = Auth::user();
          $users = DB::select('select * from users');
          return view('translate.home');
      }else{
        User::where(['id'=>$id])->delete();
        $user = Auth::user();
        $users = DB::select('select * from users');
        return view('page.seeusers')
            ->with('user' , $user)
            ->with('users' , $users);
      }

    }

    public function edit_user($id){
      $level = User::where(['id' => $id])->first();
      if($level->level_id == 2){
        DB::table('users')
            ->where('id', $id)
            ->update([
                'level_id' => 1]);
      }elseif($level->level_id == 1){
        DB::table('users')
            ->where('id', $id)
            ->update([
                'level_id' => 2]);
      }

      $user = Auth::user();
      $users = DB::select('select * from users');
      return view('page.seeusers')
          ->with('user' , $user)
          ->with('users' , $users);
    }

    public function edit_word_get($id){
      $user = Auth::user();
      $word = Word::where(['id' => $id])->first();
      return view('page.editword')
      ->with('user' , $user)
      ->with('word' , $word);
    }


    public function edit_word_post(Request $request , $id){
      $en_word = $request->input('english');
      $pe_word = $request->input('persian');

        DB::table('words')
              ->where('id', $id)
              ->update([
                'pe_word' => $pe_word,
                'en_word' => $en_word]);
        $user = Auth::user();
        $words = DB::select('select * from words');
      return view('page.dictionary-E-P')
      ->with('user' , $user)
      ->with('words' , $words);
    }

    public function choose_language($lan){
      if($lan == 'pe'){
        return view('translate.home')
        ->with('lan', 'pe')
        ->with('search', '')
        ->with('word', '');

      }elseif($lan == 'en'){
        return view('translate.home')
        ->with('lan', 'en')
        ->with('search', '')
        ->with('word', '');

      }

    }

    public function result(Request $request){
      $lan = $request->input('lan');
      $word = $request->input('word');
      if(!$word){
          return redirect()->route('/');
      }else{
        if($lan == 'pe'){
          $search = Word::where('pe_word', 'LIKE' , "%{$word}%")
              ->get();
          if($search->count() == 0){
            return view('translate.home')
            ->with('lan', 'pe')
            ->with('search' , $word)
            ->with('word', $word);
          } else{
            foreach ($search as $search) {
              return view('translate.home')
              ->with('lan', 'en')
              ->with('search' , $search->en_word)
              ->with('word', $word);
            }
          }
        }elseif ($lan == 'en') {
          $search = Word::where('en_word', 'LIKE' , "%{$word}%")
              ->get();
              if($search->count() == 0){
                return view('translate.home')
                ->with('lan', 'en')
                ->with('search' , $word)
                ->with('word', $word);
              } else{
                foreach ($search as $search) {
                  return view('translate.home')
                  ->with('lan', 'en')
                  ->with('search' , $search->pe_word)
                  ->with('word', $word);
                }


              }

        }

      }



    }
}
