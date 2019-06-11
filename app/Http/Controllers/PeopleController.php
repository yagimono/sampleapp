<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Person;

class PeopleController extends Controller
{
    public function index()
    {
        // peopleテーブルから全てのレコードを取得
        $people = DB::table('people')->get(); // クエリビルダを使用して取得
        // $people = Person::all(); // Eloquentを使用して取得

        // 各レコードの生年月日から年齢を算出
        $people = $people->map(function ($person) {
            $person->age = floor((date('Ymd') - str_replace("-", "", $person->birthday)) / 10000);
            return $person;
        });

        // viewに値を設定し表示
        return view('people.index', ['people' => $people]);
    }
}
