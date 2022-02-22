<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function index()
    {
       return view('auth.login');
    }
    public function create()
    {
        return view('auth.register');
    }
    public function registration(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|max:3',
        ]);

        $data = $request->all();
        $check = $this->create_reg($data);

        return redirect()->route("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    public function create_reg(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function postlogin(Request $request)
    {
        $request-> validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $cred = $request->only('email','password');
        if(Auth::attempt($cred)){
            return redirect('dashboard')->withsuccess('successsfully login');
        }
        return redirect("login")->withSuccess('something is wrong ');

    }


    public function store(Request $request)
    {
        //
    }




    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
