<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use validator;

class UsersController extends Controller
{

    private $formItems = ["name", "mail", "password"];

	private $validator = [
		"name" => "required|string|max:100",
		"mail" => "required|string|max:100",
		"password" => "required|string|max:100"
	];

    public function addUser() {
        return view('users/addUser');
    }

    public function userConfirm(Request $request) {
        $user_data = $request->all();
        $request->session()->put('user_data',$user_data);
        return view('users/confirmUser',compact('user_data'));
    }

    public function userComplete(Request $request) {
        $user_data = $request->session()->get('user_data');
        $user = new User;
        $user->name =  $user_data['name'];
        $user->email = $user_data['mail'];
        $user->password = $user_data['password'];
        $user->save();

        return view('users/completeUser');

    }
}
