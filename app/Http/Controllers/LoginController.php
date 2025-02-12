<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(Request $request) {
//          $foo = session()->get('foo');
//          $foo = session('foo');

        if($test = session('test')) {
            action($test);
        }

//          dd(session()->all());
//        $ip = $request->ip();
//        $path = $request->path();
//        $url = $request->url();
//        $full_url = $request->fullUrl();

//        dd($request->is('login'));
//        dd($request->routeIs('log*'));

        return view('login.index');
    }

    function store(Request $request)
    {
//        $session = app('session');
//        $session = session();
//        session()->put('foo', 'asdsd');
//        session(['foo' => 'Asds']);
//        session()->forget('foo');
//        session()->flush();  // забыть все данные сессии

        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->boolean('remember');

        //auth user

        alert(__('Добро пожаловать'), 'success');


//        return 'Запрос логина';
//        return response()->redirectTo('/foo');
//        return response()->redirectToRoute('user.posts');
        return redirect()->route('user.posts');
    }
}
