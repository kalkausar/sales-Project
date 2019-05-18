<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use ManageSlider;
use ManageAbout;
use ManageContact;
use ManageProduct;
use ManageSpecification;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
  public function home(){
    $slider = DB::table('tb_slider')->get();
    return view('index')->with(compact('slider'));
  }
}
