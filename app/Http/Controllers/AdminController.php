<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{
    public function admin_login(){
    	return view('admin.admin_login');
    }

    public function login_deshboard(Request $request){
    	$email = $request->admin_email;
    	$password = $request->admin_password;
    	$result=DB::table('admin_table')->where('admin_email', $email)->where('admin_password', $password)->first();

    	if($result){
    		$notification=array(
                'messege'=>'Successfully Admin Login Done',
                'alert-type'=>'success'
            	);
                return Redirect::to('/admin-deshboard')->with($notification);
    	}else{
    		$notification=array(
	                        'messege'=>'Plase Login with correct data',
	                        'alert-type'=>'error'
	                        );
	                        return Redirect()->back()->with($notification);
    	}
    	//return view('admin.deshboard');
    }

    public function admin_deshboard(){
    	return view('admin.deshboard');
    }

    public function logout(){
    	$notification=array(
			'messege'=>'Successfully Admin Logout Done',
			'alert-type'=>'success'
			);
    	return Redirect::to('/backends')->with($notification);
    }

    public function student_logout(){
        $notification=array(
            'messege'=>'Successfully Student Logout Done',
            'alert-type'=>'success'
            );
        return Redirect::to('/')->with($notification);
    }

    public function view_profile(){
    	return view('admin.view_profile');
    }

    public function settings(){
    	return view('admin.setting');
    }

    public function student_login_deshboard(Request $request){
        $student_email = $request->student_email;
        $student_password = $request->student_password;
        $result=DB::table('student_tbl')->where('student_email', $student_email)->where('student_password', $student_password)->first();

        if($result){
            $notification=array(
                'messege'=>'Successfully Student Login Done',
                'alert-type'=>'success'
                );
                return view('student_layout')->with("result",$result);
        }else{
            $notification=array(
                            'messege'=>'Plase Login with correct data',
                            'alert-type'=>'error'
                            );
                            return Redirect()->back()->with($notification);
        }
        //return view('admin.deshboard');
    }

    public function student_deshboard($student_id){
        $result=DB::table('student_tbl')->where('student_id', $student_id)->first();
        return view('student_layout')->with("result",$result);
    }



}
