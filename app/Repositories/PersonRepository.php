<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Person;

class PersonRepository
{
    public function fetchPeople()
    {
        return DB::table('people')->get(); // クエリビルダを使用して取得
        // return $people = Person::all(); // Eloquentを使用して取得
    }
}