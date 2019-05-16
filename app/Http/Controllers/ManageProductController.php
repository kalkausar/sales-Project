<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageProduct;
use App\Http\Requests;
use DB;
use Auth;
use Respond;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ManageProductController extends Controller
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
     $manages = ManageProduct::all();
     return view('admin.produk', ['manages'=>$manages]);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
       return view('admin.createProduk');
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
         $lokasifileskr = '/photosProduct/'.$namafile;
         //cek jika file sudah ada...
         if ($ext == "png" ||
             $ext == "jpg")
         {
           $destinasi = public_path('/photosProduct');
           $proses = $request->file('tes')->move($destinasi,$namafile);


          $manages = new ManageProduct;
          $manages->product_name = $request->product_name;
          $manages->product_desc = $request->product_desc;
          $manages->product_image = $lokasifileskr;
          // $manages->id_category = 1;
          // $manages->status = 1;
          // $manages->slug = str_slug($request->title);
          // $manages->keyword = $request->keyword;
          $manages->save();

      return redirect('produkPageAdmin')->with('message','data berhasil ditambahkan!!');
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
      $manages = ManageProduct::find($id);
      return view('admin.editProduk', ['manages'=>$manages]);
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
      $manages = ManageProduct::find($id);
      $manages->product_name = $request->product_name;
      $manages->product_desc = $request->product_desc;
      // $manages->id_category = 1;
      // $manages->status = 1;
      // $manages->slug = str_slug($request->title);
      // $manages->keyword = $request->keyword;
      $manages->save();
      return redirect('produkPageAdmin')->with('message','data berhasil diupdate!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $manages = ManageProduct::find($id);
      $manages->delete();
      return redirect('produkPageAdmin')->with('message','data berhasil didelete!!');
    }
}
