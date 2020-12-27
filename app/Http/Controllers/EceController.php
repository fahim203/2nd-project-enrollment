<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EceController extends Controller
{
    public function ece(){
    	//return view('admin.ece');
    	$ece_student = DB::table('student_tbl')->where(["student_department"=>3])->get();
        return view('admin.ece',compact('ece_student'));
    }
}
