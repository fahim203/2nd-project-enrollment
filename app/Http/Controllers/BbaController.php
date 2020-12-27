<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BbaController extends Controller
{
    public function bba(){
    	//return view('admin.bba');
    	$bba_student = DB::table('student_tbl')->where(["student_department"=>2])->get();
        return view('admin.bba',compact('bba_student'));
    }
}
