<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use \App\Models\marks;
use Illuminate\Database\Seeder;
use Str;
use Hash;

class markssSeeder extends Seeder
{

    private $userData=[];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<50000;$i++){
            $userData[]=[
                'mark 1'=>Str::random(10),
                'mark 2'=>Str::random(10),
                'mark 3'=>Str::random(10)
            ];
        }

        $chunks=array_chunk($userData,5000);
        foreach($chunks as $chunk){
             marks::insert($chunk);
        }
    }
}
