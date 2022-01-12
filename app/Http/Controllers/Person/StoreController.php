<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\StoreRequest;
use App\Models\Person;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        // return $data;
        $person = Person::create($data);
            // dd($person);
      
        return $person;
    }
  
}
