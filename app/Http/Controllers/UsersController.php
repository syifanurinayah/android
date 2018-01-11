<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() 
    {
      $halaman = 'users';
      $users_list= User::orderBy('name', 'ASC')->Paginate(5);
      return view('users.index', compact('users_list','halaman','jumlah_users'));
    }

    public function create()
    {
    	return view('users.create');
    }

     public function store(Request $request)
    {
     	$input = $request->all();

     	$validator = Validator::make($input,[
     		'name' => 'required|string|',
     		'email' => 'required|string|unique:users,email',
        	
     	]);

     	if ($validator->fails())
      {
     		return redirect('user/create')->withInput();
     	}

     	Users::create($input);

     	return redirect('users');
     }


     public function edit($id)
     {
      $users = User::findOrFail($id);
      return view('users.edit', compact('users'));
     }


     public function update($id, Request $request)
     {

      $users = User::findOrFail($id);
      $users->update($request->all());
      return redirect('user');
     }

     public function destroy($id)
     {
      $users = User::findOrFail($id);
      $users->delete();
      return redirect('users');
     }
}
