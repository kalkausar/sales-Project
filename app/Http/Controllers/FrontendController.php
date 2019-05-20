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
    $about = DB::table('tb_about')->get();
    return view('index')->with(compact('slider','about'));
  }

  public function about(){
    $about = DB::table('tb_about')->get();
    $contact = DB::table('tb_contact')->get();
    return view('frontend.about')->with(compact('about','contact'));
  }

  public function contact(){
    $contact = DB::table('tb_contact')->get();
    $about = DB::table('tb_about')->get();
    return view('frontend.contact')->with(compact('contact','about'));
  }
}
