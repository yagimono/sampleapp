<?php

namespace App\Http\Controllers;

use App\Services\PersonService;

class PeopleController extends Controller
{
    private $service;

    public function __construct(PersonService $service) // ←インジェクション！
    {
        $this->service = $service;
    }

    public function index()
    {
        // peopleテーブルから全てのレコードを取得
        $people = $this->service->fetchPeople();

        // 各レコードの生年月日から年齢を算出
        $people = $people->map(function ($person) {
            $person->age = $this->service->calculateBirthday($person->birthday);
            return $person;
        });

        // viewに値を設定し表示
        return view('people.index', ['people' => $people]);
    }
}
