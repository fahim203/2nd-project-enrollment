<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutionFeeController extends Controller
{
    public function tution_fees(){
    	return view('admin.tution_fee');
    }
}
