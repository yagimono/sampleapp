<?php

namespace App\Repositories\Person;

use App\Person;

class EQPersonRepository implements PersonRepository
{
    public function fetchPeople()
    {
        return Person::all(); // Eloquentを使用して取得
    }
}
