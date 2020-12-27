<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{

	public function add_teachers(){
    	return view('admin.add_teachers');
    }

    public function save_teacher(Request $request){
     	$data=array();
        $data['teacher_name'] = $request->teacher_name;
        $data['teacher_phone'] = $request->teacher_phone;
        $data['teacher_adderss'] = $request->teacher_adderss;
        $data['teacher_department'] = $request->teacher_department;

        $teacher_image=$request->file('teacher_image');
        if($teacher_image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($teacher_image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/teacher/';
            $image_url=$upload_path.$image_full_name;
            $success=$teacher_image->move($upload_path,$image_full_name);
            if($success){
                $data['teacher_image']=$image_url;
                $add = DB::table('tbl_teachers')->insert($data);
                if($add){
                    $notification=array(
                        'messege'=>'teacher Added Successfully with image',
                        'alert-type'=>'success'
                        );
                        return Redirect::to('/add_teachers')->with($notification);
                }else{
                    return Redirect()->back();
                }
            }
        }else{
        	$add = DB::table('tbl_teachers')->insert($data);
            $notification=array(
                        'messege'=>'teacher Added Successfully without image',
                        'alert-type'=>'error'
                        );
                        return Redirect::to('/add_teachers')->with($notification);
        	}
     }

    public function all_teachers(){
    	$all_teachers = DB::table('tbl_teachers')->get();
        return view('admin.all_teachers',compact('all_teachers'));
    }

    public function edit_teacher($teacher_id){
    	$single = DB::table('tbl_teachers')
    			  ->where('teacher_id',$teacher_id)
    			  ->first();
    	return view('admin.edit_teacher')->with("single",$single);

    	 
    }

    public function update_teacher(Request $request, $teacher_id){
 		$data=array();
        $data['teacher_name'] = $request->teacher_name;
        $data['teacher_phone'] = $request->teacher_phone;
        $data['teacher_adderss'] = $request->teacher_adderss;
        $data['teacher_department'] = $request->teacher_department;
        
        $teacher_image=$request->file('teacher_image'); 
        if($teacher_image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($teacher_image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/teacher/';
            $image_url=$upload_path.$image_full_name;
            $success=$teacher_image->move($upload_path,$image_full_name);
            if($success){
              $data['teacher_image']=$image_url; 
              	$img = DB::table('tbl_teachers')->where('teacher_id',$teacher_id)->first();
        		$image_path = $img->teacher_image;
        		if($image_path != NULL){
                    $done = unlink($image_path); 
                }
        	  $user = DB::table('tbl_teachers')->where('teacher_id',$teacher_id)->update($data);
        	  if($user){
        			$notification=array(
                        'messege'=>'teacher Updated Successfully with New image',
                        'alert-type'=>'success'
                        );
                   return Redirect::to('/all_teachers')->with($notification);
        		}else{
        			return Redirect()->back();
        		}

        }
      }
      else{
        	$user = DB::table('tbl_teachers')->where('teacher_id',$teacher_id)->update($data);
        		if($user){
        			$notification=array(
                        'messege'=>'teacher Updated Successfully with old image',
                        'alert-type'=>'success'
                        );
                    return Redirect::to('/all_teachers')->with($notification);
        		}
        }    		
    } 
}
