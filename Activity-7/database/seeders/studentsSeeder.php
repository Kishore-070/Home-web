<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use \App\Models\students;
use Illuminate\Database\Seeder;
use Str;
use Hash;

class studentsSeeder extends Seeder
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
                'student name'=>Str::random(15),
                'email'=>Str::random(10),
                'Address'=>Str::random(40)
            ];
        }

        $chunks=array_chunk($userData,5000);
        foreach($chunks as $chunk){
             students::insert($chunk);
        }
    }
}
