<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 

class UserController extends Controller
{
    public function index()
  {
      $users = User::paginate(10);
      return view(
          'users.index',
          ['users' => $users]
      );
  }
  public function show(){
      $user = User::find($user);
      return view('users.show',['users'=>$user]);
  }
  public function 
}


