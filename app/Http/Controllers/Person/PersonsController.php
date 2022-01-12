<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;


class PersonsController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name'=> 'Vasya',
                'age'=>32,
                'job'=>'developer'
            ],
            [
                'id' => 2,
                'name'=> 'Ira',
                'age'=>43,
                'job'=>'sales manager'
            ],
             
        ];
        return $persons;
    }
  
}
