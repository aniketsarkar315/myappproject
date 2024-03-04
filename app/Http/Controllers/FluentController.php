<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Fluent String</h1>';

        $slice = Str::of('Welcome to my Website programming')->after('Welcome to');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 . '<br>';

        $string = Str::of('Hello')->append('World');
        echo $string . '<br>';

        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br>';

        $replaced = Str::of('LARAVEL 7.0')->replace('7.0','8.0');
        echo $replaced . '<br>';

        $converted = Str::of('this is a title')->title();
        echo $converted . '<br>';
    }
}
 