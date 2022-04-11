<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mypageController extends Controller
{
    public function mypageList () {
        $login_user_id = Session::get("user_id"); 
        if(!isset($login_user_id)) {
            return view('/login');
        }
        $login_user = User::where('id','=',$login_user_id)->first();
        compact('login_user',$login_user);
        // セッションに値がない場合は強制的にログインページへリダイレクトする

    }
}
