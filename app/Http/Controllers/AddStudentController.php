<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AddStudentController extends Controller
{
    public function add_student(){
    	return view('admin.add_student');
    }

    public function save_student(Request $request){
     	$data=array();
        $data['student_name'] = $request->student_name;
        $data['student_roll'] = $request->student_roll;
        $data['student_father_name'] = $request->student_father_name;
        $data['student_mother_name'] = $request->student_mother_name;
        $data['student_email'] = $request->student_email;
        $data['student_phone'] = $request->student_phone;
        $data['student_adderss'] = $request->student_adderss;
        $data['student_password'] = $request->student_password;
        $data['student_department'] = $request->student_department;
        $data['student_admission_year'] = $request->student_admission_year;

        $student_image=$request->file('student_image');
        if($student_image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($student_image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/student/';
            $image_url=$upload_path.$image_full_name;
            $success=$student_image->move($upload_path,$image_full_name);
            if($success){
                $data['student_image']=$image_url;
                $add = DB::table('student_tbl')->insert($data);
                if($add){
                    $notification=array(
                        'messege'=>'student Added Successfully with image',
                        'alert-type'=>'success'
                        );
                        return Redirect::to('/add_student')->with($notification);
                }else{
                    return Redirect()->back();
                }
            }
        }else{
        	$add = DB::table('student_tbl')->insert($data);
            $notification=array(
                        'messege'=>'student Added Successfully without image',
                        'alert-type'=>'error'
                        );
                        return Redirect::to('/add_student')->with($notification);
        	}
     }

     public function student_profile($student_id){
        $result = DB::table('student_tbl')
                  ->where('student_id',$student_id)
                  ->first();

        return view('student.student_view')->with("result",$result);
        //return view('student.student_view');
    }

    public function student_setting($student_id){
        $result = DB::table('student_tbl')
                  ->where('student_id',$student_id)
                  ->first();

        return view('student.student_setting')->with("result",$result);
        //return view('student.student_view');
    }
}
