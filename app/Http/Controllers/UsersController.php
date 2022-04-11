<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use validator;

class UsersController extends Controller
{

    private $formItems = ["name", "mail", "password"];

	private $validator = [
		"name" => "required|string|max:100",
		"mail" => "required|string|max:100",
		"password" => "required|string|max:100"
	];
//ユーザー登録画面へ遷移
    public function addUser() {
        return view('users/addUser');
    }
// 確認画面処理
    public function userConfirm(Request $request) {
        $user_data = $request->all();
        $request->session()->put('user_data',$user_data);
        return view('users/confirmUser',compact('user_data'));
    }
// 完了画面処理
    public function userComplete(Request $request) {
        $user_data = $request->session()->get('user_data');
        $user = new User;
        $user->name =  $user_data['name'];
        $user->email = $user_data['mail'];
        $user->password = $user_data['password'];
        $user->save();

        return view('users/completeUser');

    }
// ログイン処理
    public function userLogin(Request $request) {
        $user_data = $request->all();
        $mail = $request->mail;
        $password = $request->password;
        // $params = ['mail' =>$user_data['mail'],'password'=>$user_data['password']];
        $user = User::where('email',"=",$mail)->where('password',"=",$password)->first();
        if ($user!=null) { 
            Session::put('user_id',$user['id']);
            $login_user = User::where('id','=',$user['id'])->first();
            return view('mypage',compact('login_user',$login_user));
        } else {
            return view('login');
        }

    }

}
