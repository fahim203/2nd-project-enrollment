<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MbaController extends Controller
{
    public function mba(){
    	//return view('admin.mba');
    	$mba_student = DB::table('student_tbl')->where(["student_department"=>5])->get();
        return view('admin.mba',compact('mba_student'));
    }
}
