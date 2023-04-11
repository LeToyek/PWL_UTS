<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        if (request('search')) {
            $m = Motor::where('merk','like','%'. request('search').'%')->paginate(5);
        }else{

            $m = Motor::paginate(5);
        }
        return view('motor.motor')
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
        return view('motor.create_motor')
            ->with('url_form', url('/motor'));
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
            'kapasitas_cc'=>'required|int',
            'harga'=>'required|int',
            'qty'=>'required|int'
        ]);
        $data = Motor::create($request->except(['_token']));
        //jika data berhasil ditambahkan, maka akan kembali ke halaman utama
        return redirect('motor')
            ->with('success','Motor Berhasil Ditambahkan');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motor  $Motor
     * @return \Illuminate\Http\Response
     */
    public function show(Motor $Motor)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motor  $Motor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = Motor::find($id);
        return view('motor.create_motor')
        ->with('m', $motor)
        ->with('url_form', url('/motor/'. $id));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motor  $Motor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'merk'=>'required|string|max:50',
            'tipe'=>'required|string|max:50',
            'warna'=>'required|string|max:50',
            'kapasitas_cc'=>'required|int',
            'harga'=>'required|int',
            'qty'=>'required|int'
        ]);
        
        
        $data = Motor::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('motor')
            ->with('success', 'Motor Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motor  $Motor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Motor::where('id', '=', $id)->delete();
        return redirect('motor')
        ->with('success','Motor Berhasil Dihapus');
    }
}
