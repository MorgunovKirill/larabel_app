<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function index()
    {
        return view('register.index');
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
            'agreement' => ['accepted']
        ]);

        $user = new User;

//        $user->name = $validated['name'];
//        $user->email = $validated['email'];
//        $user->password = $validated['password'];
//

        $user = User::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $user->save();

        return redirect()->route('user.user');


//        $data = $request->all();
////        $data = $request->only(['name', 'email', 'password']);
////        $data = $request->except(['_token']);
//
//        $name = $request->input('name');
////        $name = $request->name;
//
////        $agreement = !! $request->input('agreement');
//        $agreement = $request->boolean('agreement');
//
////        dd($request->has('foo'));
////        dd($request->filled('agreement'));
////        dd($request->missing('agreement'));
//
//        if($name = $request->input('name')) {
//            $name = strtoupper($name);
//        }
////       return 'Запрос регистрации';
//
//        if (true) {
//            return redirect()->back()->withInput();
//        }


    }
}
