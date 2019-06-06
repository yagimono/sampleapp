<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new DateTime();

        $param = [
            'name' => 'kenta',
            'mail' => 'kenta@kawabata.jp',
            'birthday' => '1983-03-15',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'sayaka',
            'mail' => 'sayaka@kawabata.jp',
            'birthday' => '1982-06-23',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'chiharu',
            'mail' => 'chiharu@kawabata.jp',
            'birthday' => '2017-03-19',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'masaki',
            'mail' => 'masaki@kawabata.jp',
            'birthday' => '2019-03-30',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('people')->insert($param);
    }
}
