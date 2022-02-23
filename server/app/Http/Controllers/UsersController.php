<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        if(request()->search){
            $users = User::search(request()->search)->get();
        }else{
            $users = User::all();
        }

        return view('users.index',['users'=>$users]);

    }
}
