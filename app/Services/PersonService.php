<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Person;

class PersonService
{
    public function fetchPeople()
    {
        return DB::table('people')->get(); // クエリビルダを使用して取得
        // return $people = Person::all(); // Eloquentを使用して取得
    }

    public function calculateBirthday(string $birthday): float
    {
        return floor((date('Ymd') - str_replace("-", "", $birthday)) / 10000);
    }
}