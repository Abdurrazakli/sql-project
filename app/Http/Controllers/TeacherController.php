<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index() {
        //getting teachers info
        $teachersData = DB::table('teachers') -> get();

        //returns table to view
        return view('teachers',compact('teachersData'));
    }
}
