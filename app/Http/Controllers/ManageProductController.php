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
     return view('admin.produk')->with(compact('manages'));
   }

   public function indexSpec()
 {
   $manages = ManageProduct::all();
   return view('admin.spek')->with(compact('manages'));
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
          $manages->product_type = $request->product_type;
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
          $manages->harga_barang = $request->harga_barang;

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
      return view('admin.editProduk')->with(compact('manages'));
    }

    public function editSpek($id)
    {
      $manages = ManageProduct::find($id);
      return view('admin.editSpek')->with(compact('manages'));
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
      $manages->harga_barang = $request->harga_barang;

      $manages->save();
      return redirect('produkPageAdmin')->with('message','data berhasil diupdate!!');
    }


    public function updateSpek(Request $request, $id)
    {
      $manages = ManageProduct::find($id);
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
      return redirect('spekPageAdmin')->with('message','data berhasil diupdate!!');
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
