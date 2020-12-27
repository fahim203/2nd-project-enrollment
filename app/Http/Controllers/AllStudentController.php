<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class AllStudentController extends Controller
{
    public function all_student(){
    	$all_student = DB::table('student_tbl')->get();
        return view('admin.all_student',compact('all_student'));
    }

    public function delete_student($student_id){
        $img = DB::table('student_tbl')->where('student_id',$student_id)->first();
        $image_url = $img->student_image;
        if( $image_url == NULL ){
                
            $delete = DB::table('student_tbl')->where('student_id',$student_id)->delete();
            if($delete){
                    $notification=array(
                        'messege'=>'student delete Successfully without image',
                        'alert-type'=>'success'
                        );
                        return Redirect::to('/all_student')->with($notification);
                }else{
                    return Redirect()->back();
                }
            }
        else{
            $done = unlink($image_url); 
            $delete = DB::table('student_tbl')->where('student_id',$student_id)->delete();    
            if($delete){
                    $notification=array(
                        'messege'=>'student delete Successfully with image',
                        'alert-type'=>'success'
                        );
                        return Redirect::to('/all_student')->with($notification);
                }else{
                    return Redirect()->back();
                }
        }        

    }

    public function view_student($student_id){
    	$single = DB::table('student_tbl')
    			  ->where('student_id',$student_id)
    			  ->first();
    	return view('admin.view_student')->with("single",$single);

    	 
    }

     public function edit_student($student_id){
    	$single = DB::table('student_tbl')
    			  ->where('student_id',$student_id)
    			  ->first();
    	return view('admin.edit_student')->with("single",$single);

    	 
    }


    public function update_student(Request $request, $student_id){
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
              	$img = DB::table('student_tbl')->where('student_id',$student_id)->first();
        		$image_path = $img->student_image;
        		if($image_path != NULL){
                    $done = unlink($image_path); 
                }
        	  $user = DB::table('student_tbl')->where('student_id',$student_id)->update($data);
        	  if($user){
        			$notification=array(
                        'messege'=>'student Updated Successfully with New image',
                        'alert-type'=>'success'
                        );
                   return Redirect::to('/all_student')->with($notification);
        		}else{
        			return Redirect()->back();
        		}

        }
      }
      else{
        	$user = DB::table('student_tbl')->where('student_id',$student_id)->update($data);
        		if($user){
        			$notification=array(
                        'messege'=>'student Updated Successfully with old image',
                        'alert-type'=>'success'
                        );
                    return Redirect::to('/all_student')->with($notification);
        		}
        }    		
    } 

    public function update_student_profile(Request $request, $student_id){
        $data=array();
        $data['student_name'] = $request->student_name;
        $data['student_father_name'] = $request->student_father_name;
        $data['student_mother_name'] = $request->student_mother_name;
        $data['student_email'] = $request->student_email;
        $data['student_phone'] = $request->student_phone;
        $data['student_adderss'] = $request->student_adderss;
        $data['student_password'] = $request->student_password;

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
                $img = DB::table('student_tbl')->where('student_id',$student_id)->first();
                $image_path = $img->student_image;
                if($image_path != NULL){
                    $done = unlink($image_path); 
                }
              $user = DB::table('student_tbl')->where('student_id',$student_id)->update($data);
              if($user){
                    $notification=array(
                        'messege'=>'student Profile Updated Successfully with New image',
                        'alert-type'=>'success'
                        );
                   return Redirect::to('/student-profile/'.$student_id)->with($notification);
                }else{
                    return Redirect()->back();
                }

        }
      }
      else{
            $user = DB::table('student_tbl')->where('student_id',$student_id)->update($data);
                if($user){
                    $notification=array(
                        'messege'=>'student Prtofile Updated Successfully with old image',
                        'alert-type'=>'success'
                        );
                    return Redirect::to('/student-profile/'.$student_id)->with($notification);
                }
        }           
    } 
}
