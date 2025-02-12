<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(request $request)
    {

        // Response
//        return ['foo' => 'bar'];
        return response()->json(['foo' => 'bar']);
//        return 'Test page';
//        return response('test', 200, []);
    }
}
