<?php

namespace demo\Http\Controllers;

class DemoController extends Controller
{
    public function sayHi ($parametro = 'Platzi')
    {
        return view('bienvenida', ['parametro' => $parametro]);
    }
}