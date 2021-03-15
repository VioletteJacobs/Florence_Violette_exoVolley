<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("photos")->insert([
            [
                "url" => "anonyme.jpg",
                "player_id" => 1,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 2,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 3,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 4,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 5,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 6,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 7,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 8,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 9,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 10,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 11,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 12,
            ],
            [
                "url" => "anonyme.jpg",
                "player_id" => 13,
            ],


        ]);
    }
}
