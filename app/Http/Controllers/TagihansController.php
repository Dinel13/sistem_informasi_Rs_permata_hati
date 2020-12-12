<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagihansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tagihans = Tagihans::all();
        dd($tagihans);
        return view('admin.tagihan.index', compact ('tagihans'));
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
            'id_bill'=>'required',
            'id_pasien'=>'required',
            'biaya_dokter'=>'required',
            'biaya_kamar'=>'required',
            'biaya_lab'=>'required',
            ]);

            Tagihans::create($request->all());

            return redirect()->route('admin.borrow.index')
            
                ->with('success','Tagihans created succesfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tagihans $tagihans)
    {
        $tagihans = Tagihans::all();
        dd($tagihans);
        return view('admin.borrow.show',compact('admin.borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tagihans $tagihans)
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
    public function update(Request $request, Tagihans $tagihans)
    {
        $request->validate([
            'id_bill'=>'required',
            'id_pasien'=>'required',
            'biaya_dokter'=>'required',
            'biaya_kamar'=>'required',
            'biaya_lab'=>'required',
        ]);

        Tagihans::where('id',$tagihans->id)
        ->update([
            'id_pasien'=>$request->id_pasien,
            'biaya_dokter'=>$request->biaya_dokter,
            'biaya_kamar'=>$request->kamar,
            'biaya_lab'=>$request->biaya_lab
            ]);
            //  $Tagihans->update($request->all());

        return redirect()->route('admin.borrow.index')
        ->with('success','Tagihans update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tagihans $Tagihans)
    {
        // $Tagihans->delete();
        Tagihans::destroy($tagihans->id);
        return redirect()->route('admin.borrow.index')
        ->with('success','Tagihans deleted successfully');
    }
}
