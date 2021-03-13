<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("teams")->insert(
            [
                [
                    "name" => "No team",
                    "city" => "",
                    "country" => "",
                    "max" => 90000

                ],
                [
                    "name" => "ok",
                    "city" => "Namur",
                    "country" => "Belgium",
                    "max" => 3

                ],
                [
                    "name" => "non",
                    "city" => "Namur",
                    "country" => "Belgium",
                    "max" => 4

                ],
                [
                    "name" => "alz",
                    "city" => "Namur",
                    "country" => "Belgium",
                    "max" => 10

                ],
                [
                    "name" => "Truelle",
                    "city" => "Porto",
                    "country" => "Portugal",
                    "max" => 10

                ],
                [
                    "name" => "Cool",
                    "city" => "Dakar",
                    "country" => "Sénégal",
                    "max" => 10

                ],
                [
                    "name" => "Poutine",
                    "city" => "Montréal",
                    "country" => "Canada",
                    "max" => 10

                ],
                [
                    "name" => "Hotdog",
                    "city" => "Texas city",
                    "country" => "USA",
                    "max" => 10

                ],
            ]
        );
    }
}
