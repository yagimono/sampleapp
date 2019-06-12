<?php

namespace App\Services;

use App\Repositories\PersonRepository;

class PersonService
{
    public function fetchPeople()
    {
        $repository = new PersonRepository;
        return $repository->fetchPeople();
    }

    public function calculateBirthday(string $birthday): float
    {
        return floor((date('Ymd') - str_replace("-", "", $birthday)) / 10000);
    }
}