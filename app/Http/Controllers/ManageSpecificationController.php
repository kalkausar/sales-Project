<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageSpecification;
use App\Http\Requests;
use DB;
use Auth;
use Respond;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class ManageSpecificationController extends Controller
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
      $manages = ManageSpecification::all();
      $managesproduct = DB::table('tb_product')->get();
      return view('admin.spek')->with(compact('manages','managesproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $managesproduct = DB::table('tb_product')->get();
      return view('admin.createSpek')->with(compact('managesproduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $manages = new ManageSpecification;
      $manages->product_id = $request->product_id;
      $manages->tipe_mesin = $request->tipe_mesin;
      $manages->isi_silinder = $request->isi_silinder;
      $manages->torsi = $request->torsi;
      $manages->bahan_bakar_jenis = $request->bahan_bakar_jenis;
      $manages->bahan_bakar_sistem = $request->bahan_bakar_sistem;
      $manages->kapasitas_tangki = $request->kapasitas_tangki;
      $manages->diameterXlangkah = $request->diameterXlangkah;
      $manages->dayaMax = $request->dayaMax;
      $manages->panjang = $request->panjang;
      $manages->lebar = $request->lebar;
      $manages->tinggi = $request->tinggi;
      $manages->jarak_sumbu = $request->jarak_sumbu;
      $manages->pijak_depan = $request->pijak_depan;
      $manages->pijak_belakang = $request->pijak_belakang;
      $manages->jarak_terendah = $request->jarak_terendah;
      $manages->ukuran_ban = $request->ukuran_ban;
      $manages->transmisi = $request->transmisi;
      $manages->rasio1 = $request->rasio1;
      $manages->rasio2 = $request->rasio2;
      $manages->rasio3 = $request->rasio3;
      $manages->rasio4 = $request->rasio4;
      $manages->rasio5 = $request->rasio5;
      $manages->rasio_reverse = $request->rasio_reverse;
      $manages->rasio_akhir = $request->rasio_akhir;
      $manages->suspensi_depan = $request->suspensi_depan;
      $manages->suspensi_belakang = $request->suspensi_belakang;
      $manages->rem_depan = $request->rem_depan;
      $manages->rem_belakang = $request->rem_belakang;
      $manages->sistem_rem = $request->sistem_rem;
      $manages->sistem_penggerak = $request->sistem_penggerak;

      $manages->save();

      return redirect('spekPageAdmin')->with('message','data berhasil ditambahkan!!');
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
      $manages = ManageSpecification::find($id);
      $managesproduct = DB::table('tb_product')->get();
      return view('admin.editspek')->with(compact('manages','managesproduct'));
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
      $manages = ManageSpecification::find($id);
      $manages->product_id = $request->product_id;
      $manages->tipe_mesin = $request->tipe_mesin;
      $manages->isi_silinder = $request->isi_silinder;
      $manages->torsi = $request->torsi;
      $manages->bahan_bakar_jenis = $request->bahan_bakar_jenis;
      $manages->bahan_bakar_sistem = $request->bahan_bakar_sistem;
      $manages->kapasitas_tangki = $request->kapasitas_tangki;
      $manages->diameterXlangkah = $request->diameterXlangkah;
      $manages->dayaMax = $request->dayaMax;
      $manages->panjang = $request->panjang;
      $manages->lebar = $request->lebar;
      $manages->tinggi = $request->tinggi;
      $manages->jarak_sumbu = $request->jarak_sumbu;
      $manages->pijak_depan = $request->pijak_depan;
      $manages->pijak_belakang = $request->pijak_belakang;
      $manages->jarak_terendah = $request->jarak_terendah;
      $manages->ukuran_ban = $request->ukuran_ban;
      $manages->transmisi = $request->transmisi;
      $manages->rasio1 = $request->rasio1;
      $manages->rasio2 = $request->rasio2;
      $manages->rasio3 = $request->rasio3;
      $manages->rasio4 = $request->rasio4;
      $manages->rasio5 = $request->rasio5;
      $manages->rasio_reverse = $request->rasio_reverse;
      $manages->rasio_akhir = $request->rasio_akhir;
      $manages->suspensi_depan = $request->suspensi_depan;
      $manages->suspensi_belakang = $request->suspensi_belakang;
      $manages->rem_depan = $request->rem_depan;
      $manages->rem_belakang = $request->rem_belakang;
      $manages->sistem_rem = $request->sistem_rem;
      $manages->sistem_penggerak = $request->sistem_penggerak;

      $manages->save();

      return redirect('spekPageAdmin')->with('message','data berhasil ditambahkan!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $manages = ManageSpecification::find($id);
      $manages->delete();
      return redirect('spekPageAdmin')->with('message','data berhasil didelete!!');
    }
}
