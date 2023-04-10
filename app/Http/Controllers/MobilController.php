<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $m = Mobil::all();
        return view('mobil.mobil')
            ->with('m',$m);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mobil.create_mobil')
            ->with('url_form', url('/mobil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'merk'=>'required|string|max:50',
            'tipe'=>'required|string|max:50',
            'warna'=>'required|string|max:50',
            'jml_penumpang'=>'required|string',
            'harga'=>'required|int',
            'qty'=>'required|int',

            
        ]);
        $data = Mobil::create($request->except(['_token']));
        //jika data berhasil ditambahkan, maka akan kembali ke halaman utama
        return redirect('mobil')
            ->with('success','Mobil Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $Mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $Mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Mobil = Mobil::find($id);
        return view('mobil.create_mobil')
        ->with('mhs', $Mobil)
        ->with('url_form', url('/Mobil/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $Mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:Mobil,nim,'.$id,
            'nama' =>'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'hp' => 'required|digits_between:6,15',
        ]);
        
        $data = Mobil::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('Mobil')
            ->with('success', 'Mobil Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $Mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mobil::where('id', '=', $id)->delete();
        return redirect('Mobil')
        ->with('success','Mobil Berhasil Dihapus');
    }
}
