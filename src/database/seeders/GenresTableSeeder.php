<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'genre' => "寿司",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('genres')->insert($param);

        $param = [
            'genre' => "焼肉",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('genres')->insert($param);

        $param = [
            'genre' => "居酒屋",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('genres')->insert($param);

        $param = [
            'genre' => "イタリアン",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('genres')->insert($param);

        $param = [
            'genre' => "ラーメン",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('genres')->insert($param);



        // $genre = [
        //     "寿司",
        //     "焼肉",
        //     "居酒屋",
        //     "イタリアン",
        //     "ラーメン",
        // ];

        // foreach ($genres as $genre){
        //     DB::table('genres')->insert([
        //         'genre' => $genre,
        //     ]);
        // }
    }
}
