<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = [
                [
                    'id' => 1,
                    'name'=> 'Vasya',
                    'age'=> 20,
                    'job'=> 'coach',
                ],
                [
                    'id' => 2,
                    'name'=> 'Ivan',
                    'age'=> 36,
                    'job'=> 'developer',
                ],
                [
                    'id' => 3,
                    'name'=> 'Petya',
                    'age'=> 80,
                    'job'=> 'trainee',
                ],
                [
                    'id' => 4,
                    'name'=> 'Kolya',
                    'age'=> 55,
                    'job'=> 'hr',
                ]
            ];
        return $persons;
    }
}
