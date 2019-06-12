<?php

namespace App\Repositories\Person;

use Illuminate\Support\Facades\DB;

class QBPersonRepository implements PersonRepository
{
    public function fetchPeople()
    {
        return DB::table('people')->get(); // クエリビルダを使用して取得
    }
}


