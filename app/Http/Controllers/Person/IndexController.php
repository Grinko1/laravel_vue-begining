<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\StoreRequest;
use App\Models\Person;

class IndexController extends Controller
{
    public function __invoke()
    {
      
        $people = Person::all();
            // dd($person);
      
        return $people;
    }
  
}
