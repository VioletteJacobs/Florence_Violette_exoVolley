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
                    "name" => "/",
                    "city" => "/",
                    "country" => "/",
                    "max" => 500

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
            ]
        );
    }
}
