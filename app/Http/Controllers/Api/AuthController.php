<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User; 
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use Auth;

class AuthController extends Controller
{
   public function register(Request $request, User $user)
   {
   	 $this->validate($request, [
   	 	'name' 		=> 'required',
   	 	'email' 	=> 'required|email|unique:users',
   	 	'password'	=> 'required|min:6',
   	 ]);


   	$user = $user->create([
   	 	'name'		=> $request->name,
   	 	'email'		=> $request->email,
   	 	'password'	=> bcrypt($request->password),
   	 	'api_token'	=> bcrypt($request->email)
   	 ]); 

     	return response()->json([$user,'return' => '1','eror' => 'Succes']);
   

   	$respone = fractal()
   		->item($user)
   		->transformWith(new UserTransformer)
   		->addMeta([
   			'token' => $user->api_token,
   		])
   		->toArray();


   		return response()->json([$respone,'return' => '0','message' => 'Your credential is wrong']);
   }

   public function login(Request $request, User $user)
   {
   	if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
   		return response()->json(['return' => '0','eror' => 'Your credential is wrong']);
   	}

   	$user = $user->find(Auth::user()->id);
     
   	$respone = fractal()   
   		->item($user)
   		->transformWith(new UserTransformer)
   		->addMeta([
   			'token' => $user->api_token,
   		])
   		->toArray(); 

   		return response()->json([$respone,'return' => '1','message' => 'Login Success']);      
   }
}
