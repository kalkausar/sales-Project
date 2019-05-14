<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageContact;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ManageContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(!Session::get('login')){
          return redirect('moshimoshi')->with('alert','Kamu harus login dulu');
      }
      $manages = ManageContact::all();
      return view('admin.contact', ['manages'=>$manages]);
      // return view('admin.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
      $manages = ManageContact::find($id);
      if(!$manages){
          abort(503);
      }
      return view('admin.contactEdit')->with('manages',$manages);
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
      $manages = ManageContact::find($id);
      $manages->contact_name = $request->contact_name;
      $manages->contact_type = $request->contact_type;
      $manages->contact_desc = $request->contact_desc;
      $manages->save();

      return redirect('contactPageAdmin')->with('message','data berhasil ditambahkan!!');
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
