<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("players")->insert([
                [
                    "name" => "Romane",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "France",
                    "role" => "back",
                    "team_id"=>"1",
                    "photo_id"=>"1"

                ],
                [
                    "name" => "Pauline",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "Brazil",
                    "role" => "back",
                    "team_id"=>"1",
                    "photo_id"=>"1"


                ],
                [
                    "name" => "Sarah",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "femal",
                    "country" => "Belgium",
                    "role" => "back",
                    "team_id"=>"1",
                    "photo_id"=>"1"


                ],
                [
                    "name" => "Samia",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "femal",
                    "country" => "USA",
                    "role" => "center",
                    "team_id"=>"1",
                    "photo_id"=>"1"


                ],
                [
                    "name" => "Célina",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "Portugal",
                    "role" => "center",
                    "team_id"=>"1",
                    "photo_id"=>"1"


                ],
                [
                    "name" => "Adèle",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "femal",
                    "country" => "Belgium",
                    "role" => "back",
                    "team_id"=>"1",
                    "photo_id"=>"1"


                ],
                [
                    "name" => "Elise",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "China",
                    "role" => "back",
                    "team_id"=>"2",
                    "photo_id"=>"1"


                ],
                [
                    "name" => "Théo",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "femal",
                    "country" => "Brazil",
                    "role" => "back",
                    "team_id"=>"1",
                    "photo_id"=>"1"


                ],
                [
                    "name" => "Assma",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "Germany",
                    "role" => "back",
                    "team_id"=>"3",
                    "photo_id"=>"1"


                ],
                [
                    "name" => "Paul",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "femal",
                    "country" => "Belgium",
                    "role" => "back",
                    "team_id"=>"3",
                    "photo_id"=>"1"


                ],
                [
                    "name" => "Nathalie",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "femal",
                    "country" => "Belgium",
                    "role" => "back",
                    "team_id"=>"8",
                    "photo_id"=>"1"
                    

                ],
                [
                    "name" => "Amina",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "Bolivia",
                    "role" => "center",
                    "team_id"=>"6",
                    "photo_id"=>"1"


                ],
                [
                    "name" => "Amal",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "Tanzania",
                    "role" => "back",
                    "team_id"=>"4",
                    "photo_id"=>"1"


                ],
            ]
            );
    }
}
