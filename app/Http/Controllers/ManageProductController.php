<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageProduct;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
      $manages = new ManageProduct;
      $manages->product_name = $request->product_name;
      $manages->product_desc = $request->product_desc;
      // $manages->id_category = 1;
      // $manages->status = 1;
      // $manages->slug = str_slug($request->title);
      // $manages->keyword = $request->keyword;
      $manages->save();

      return redirect('produkPageAdmin')->with('message','data berhasil ditambahkan!!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
