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
                    "gender" => "female",
                    "country" => "France",
                    "role" => "back",
                    "team_id"=>"2",

                ],
                [
                    "name" => "Pauline",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "female",
                    "country" => "Brazil",
                    "role" => "back",
                    "team_id"=>"1",



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
                    "team_id"=>"2",



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



                ],
                [
                    "name" => "Célin",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "Portugal",
                    "role" => "center",
                    "team_id"=>"1",



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



                ],
                [
                    "name" => "Eli",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "China",
                    "role" => "back",
                    "team_id"=>"2",



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



                ],
                [
                    "name" => "Antoine",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "Germany",
                    "role" => "back",
                    "team_id"=>"3",



                ],
                [
                    "name" => "Paul",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "Belgium",
                    "role" => "back",
                    "team_id"=>"3",



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

                    

                ],
                [
                    "name" => "Amin",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "Bolivia",
                    "role" => "center",
                    "team_id"=>"6",



                ],
                [
                    "name" => "Adrien",
                    "firstname" => "doural",
                    "age" => 26,
                    "phone" => "0485/14.25.35",
                    "email" => "doural@gmail.com",
                    "gender" => "male",
                    "country" => "Tanzania",
                    "role" => "back",
                    "team_id"=>"4",



                ],
            ]
            );
    }
}
