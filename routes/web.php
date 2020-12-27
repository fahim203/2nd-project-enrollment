<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student_login');
});

//logout
Route::get('/logout','AdminController@logout');
Route::get('/student-logout','AdminController@student_logout');

Route::get('/backends', 'AdminController@admin_login');


//admin logim

Route::post('/adminlogin','AdminController@login_deshboard');
Route::get('/admin-deshboard','AdminController@admin_deshboard');

//student logim
Route::post('/studentlogin','AdminController@student_login_deshboard');
Route::get('/student-deshboard/{student_id}','AdminController@student_deshboard');


//admin view profile
Route::get('/view-profile','AdminController@view_profile');

//admin settings
Route::get('/settings','AdminController@settings');

//add student
Route::get('/add_student','AddStudentController@add_student');
Route::post('/save-student','AddStudentController@save_student');

Route::get('/student-profile/{student_id}','AddStudentController@student_profile');
Route::get('/student-setting/{student_id}','AddStudentController@student_setting');


//all student
Route::get('/all_student','AllStudentController@all_student');
Route::get('/delete-student/{student_id}','AllStudentController@delete_student');
Route::get('/view-student/{student_id}','AllStudentController@view_student');
Route::get('/edit-student/{student_id}','AllStudentController@edit_student');
Route::post('/update-student/{student_id}','AllStudentController@update_student');
Route::post('/update-student-profile/{student_id}','AllStudentController@update_student_profile');

//student tution fees
Route::get('/tution_fees','TutionFeeController@tution_fees');

//student cse
Route::get('/cse','CseController@cse');

//student bba
Route::get('/bba','BbaController@bba');

//student ece
Route::get('/ece','EceController@ece');

//student eee
Route::get('/eee','EeeController@eee');

//student mba
Route::get('/mba','MbaController@mba');

//all teachers
Route::get('/all_teachers','TeacherController@all_teachers');
Route::get('/add_teachers','TeacherController@add_teachers');
Route::post('/save-teacher','TeacherController@save_teacher');
Route::get('/edit-teacher/{teacher_id}','TeacherController@edit_teacher');
Route::post('/update-teacher/{teacher_id}','TeacherController@update_teacher');
