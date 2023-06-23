<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function __invoke()
    {
        return view('index');
    }
}
