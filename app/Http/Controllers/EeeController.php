<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EeeController extends Controller
{
    public function eee(){
    	//return view('admin.eee');
    	$eee_student = DB::table('student_tbl')->where(["student_department"=>4])->get();
        return view('admin.eee',compact('eee_student'));
    }
}
