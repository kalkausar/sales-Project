<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use ManageSlider;
use ManageAbout;
use ManageContact;
use App\ManageProduct;
use ManageSpecification;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
  public function home(){
    $slider = DB::table('tb_slider')->get();
    $about = DB::table('tb_about')->get();
    $product = DB::table('tb_product')->get();
    $testi = DB::table('tb_testimoni')->get();
    return view('index')->with(compact('slider','about','product','testi'));
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

  public function product(){
    $product = DB::table('tb_product')->get();
    $about = DB::table('tb_about')->get();
    $testi = DB::table('tb_testimoni')->get();
    return view('frontend.product')->with(compact('product','about','testi'));
  }

  public function productDetail($id){
    $product = DB::table('tb_product')->get();
    // dd($product);
    $contact = DB::table('tb_contact')->get();
    $manages = ManageProduct::find($id);
    return view('frontend.viewSpesifikasi')->with(compact('product','contact','manages'));
  }
}
