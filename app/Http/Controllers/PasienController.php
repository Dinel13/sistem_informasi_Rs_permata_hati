<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = Pasien::all();
        dd($pasien);
        return view('admin.pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.borrow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pasien'=>'required',
            'nama'=>'required',
            'umur'=>'required',
            'gender'=>'required',
            'alamat'=>'required',
            'penyakit'=>'required',
            'id_dokter'=>'required',
            'id_dokter'=>'required',
            ]);

            Pasien::create($request->all());

            return redirect()->route('admin.pasien.index')
            
                ->with('success','Pasiens created succesfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        $pasien = Pasien::all();
        dd($pasien);
        return view('admin.borrow.show',compact('admin.borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('admin.borrow.edit',compact('admin.borrow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'id_pasien'=>'required',
            'nama'=>'required',
            'umur'=>'required',
            'gender'=>'required',
            'alamat'=>'required',
            'penyakit'=>'required',
            'id_dokter'=>'required',
            'id_dokter'=>'required',
        ]);
            Pasien::Where('id',$pasien->id)
            ->update(['nama'=>'required',
            'umur'=>$request->umur,
            'gender'=>$request->gender,
            'alamat'=>$request->alamat,
            'penyakit'=>$request->penyakit,
            'id_dokter'=>$request->id_dokter,
            'id_dokter'=>$request->id_dokter
            ]);

        // $pasien->update($request->all());

        return redirect()->route('admin.pasien.index')
        ->with('success','Pasien update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        // $pasien->delete();
        Pasien::destroy($pasien->id);
        return redirect()->route('admin.pasien.index')
        ->with('success','Pasien deleted successfully');
    }
}
