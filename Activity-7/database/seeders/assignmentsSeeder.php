<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use \App\Models\assignments;
use Illuminate\Database\Seeder;
use Str;
use Hash;

class assignmentsSeeder extends Seeder
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
                'Assignment name'=>Str::random(30),
                'Submission status'=>Str::random(5)
            ];
        }

        $chunks=array_chunk($userData,5000);
        foreach($chunks as $chunk){
             assignments::insert($chunk);
        }
    }
}
