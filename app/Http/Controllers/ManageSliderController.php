<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageSlider;
use App\Http\Requests;
use DB;
use Auth;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ManageSliderController extends Controller
{
  public function getRoleAdmin() {
      $rolesyangberhak = DB::table('roles')->where('id','=','1')->first()->namaRule;
      return $rolesyangberhak;
  }
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('rule:'.$this->getRoleAdmin().',nothingelse');
  }
    public function index()
    {
      $manages = ManageSlider::all();
      return view('admin.indexAdmin', ['manages'=>$manages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.createSlider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->hasFile('tes')) {
         $namafile = $request->file('tes')->getClientOriginalName();
         $ext = $request->file('tes')->getClientOriginalExtension();
         $lokasifileskr = '/photosSlider/'.$namafile;
         //cek jika file sudah ada...
         if ($ext == "png" ||
             $ext == "jpg")
         {
           $destinasi = public_path('/photosSlider');
           $proses = $request->file('tes')->move($destinasi,$namafile);


          $manages = new ManageSlider;
          $manages->slider_name = $request->slider_name;
          $manages->slider_text = $request->slider_text;
          $manages->slider_image = $lokasifileskr;
          // $manages->id_category = 1;
          // $manages->status = 1;
          // $manages->slug = str_slug($request->title);
          // $manages->keyword = $request->keyword;
          $manages->save();

      return redirect('admin')->with('message','data berhasil ditambahkan!!');
    } else {
             return Redirect::back()->withErrors(['file tidak sesuai, tidak bisa diupload']);
           }
         }
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $manages = ManageSlider::find($id);
      return view('admin.editSlider', ['manages'=>$manages]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $manages = ManageSlider::find($id);
      $manages->slider_name = $request->slider_name;
      $manages->slider_text = $request->slider_text;

      $manages->save();
      return redirect('admin')->with('message','data berhasil ditambahkan!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $manages = ManageSlider::find($id);
      $manages->delete();
      return redirect('admin')->with('message','data berhasil didelete!!');
    }
}
