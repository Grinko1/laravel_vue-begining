<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\UpdateRequest;
use App\Models\Person;

class DeleteController extends Controller
{
    public function __invoke(Person $person)
    {
        
        $person->delete($person);
       
        return response([]);
    }
  
}
