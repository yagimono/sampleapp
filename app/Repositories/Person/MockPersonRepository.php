<?php

namespace App\Repositories\Person;

use Illuminate\Support\Collection;

class MockPersonRepository implements PersonRepository
{
    public function fetchPeople()
    {
        $person = new \stdClass();
        $person->name = 'test';
        $person->mail = 'test@test.jp';
        $person->birthday = '2000-01-01';
        return new Collection([$person]);
    }
}


