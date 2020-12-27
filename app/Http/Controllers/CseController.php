<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CseController extends Controller
{
    public function cse(){
    	//return view('admin.cse');
    	$cse_student = DB::table('student_tbl')->where(["student_department"=>1])->get();
        return view('admin.cse',compact('cse_student'));
    }
}
