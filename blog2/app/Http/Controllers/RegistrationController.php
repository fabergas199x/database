<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	$this->validate(request(), [
    		'name' 		=> 'required',
    		'email' 	=> 'required|email',
    		'password' 	=> 'required|confirmed',
    		'gender' 	=> 'required',
    		'phone' 	=> 'required'
    	]);

    	$user = User::create([
    		'name' 		=> request('name'),
			'email' 	=> request('email'),
			'password' 	=> bcrypt(request('password')),
			'gender'	=> request('gender'),
			'phone'		=> request('phone')
		]);

    	auth()->login($user);

    	return redirect()->home();
    }

    public function edit($id)
    {
        $objUser = new User();
        $getUserById = $objUser->find($id)->toArray();
        return view('registration.edit')->with('getUserById', $getUserById);
    }

    public function update(Request $request)
    {
        $allRequest = $request->all();
        $name = $allRequest['name'];
        $gender = $allRequest['gender'];
        $phone = $allRequest['phone'];
        $idUser = $allRequest['id'];

        $objUser = new User();
        $getUserById = $objUser->find($idUser);
        $getUserById->name = $name;
        $getUserById->gender = $gender;
        $getUserById->phone = $phone;
        $getUserById->save();

        return redirect()->user();
    }
}
