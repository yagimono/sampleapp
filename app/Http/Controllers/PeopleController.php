<?php

namespace App\Http\Controllers;

use App\Services\PersonService;

class PeopleController extends Controller
{
    public function index()
    {
        $service = app()->make(PersonService::class);

        // peopleテーブルから全てのレコードを取得
        $people = $service->fetchPeople();

        // 各レコードの生年月日から年齢を算出
        $people = $people->map(function ($person) use ($service) {
            $person->age = $service->calculateBirthday($person->birthday);
            return $person;
        });

        // viewに値を設定し表示
        return view('people.index', ['people' => $people]);
    }
}
