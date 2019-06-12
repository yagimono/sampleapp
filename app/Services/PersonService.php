<?php

namespace App\Services;

use App\Repositories\PersonRepository;

class PersonService
{
    private $repository;

    public function __construct(PersonRepository $repository) // ←インジェクション！
    {
        $this->repository = $repository;
    }

    public function fetchPeople()
    {
        return $this->repository->fetchPeople();
    }

    public function calculateBirthday(string $birthday): float
    {
        return floor((date('Ymd') - str_replace("-", "", $birthday)) / 10000);
    }
}