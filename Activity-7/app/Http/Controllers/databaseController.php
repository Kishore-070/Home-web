<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\teachers;
use App\Models\assignments;
use App\Models\marks;

class databaseController extends Controller
{
    function show1()
    {
        $data= students::all();
        return view('student',['students'=>$data]);

    }

    function show2()
    {
        $data= teachers::all();
        return view('teacher',['teachers'=>$data]);

    }

    function show3()
    {
        $data= assignments::all();
        return view('assignment',['assignments'=>$data]);

    }

    function show4()
    {
        $data= marks::all();
        return view('marks',['marks'=>$data]);

    }
}
