<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        return view('test');
    }

    public function store(Request $request)
    {
        return redirect('/test')->with('message', 'Вы посетили тест-страницу');
    }
}
