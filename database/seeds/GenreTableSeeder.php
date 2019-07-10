<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name" => "Crime"],
            ["name" => "Comedy"],
            ["name" => "Action"],
            ["name" => "Adventures"],
            ["name" => "Romance"],
            ["name" => "Fantasy"],
            ["name" => "Drama"],
            ["name" => "Historical"],
            ["name" => "Horror"],
            ["name" => "Mystery"],
        ];
        DB::table('genres')->insert($data);
    }
}
