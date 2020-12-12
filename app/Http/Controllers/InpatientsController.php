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
        $inpatients = Inpatients::all();
        dd($inpatiens);
        return view('admin.borrow.index');
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
            'id_pasien',
            'id_kamar',
            'tanggal_penerimaan',
            'tanggal_dismisi',
            'lab_no',
            ]);

            Inpatients::create($request->all());

            return redirect()->route('admin.borrow.index')
            
                ->with('success','patients created succesfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Intpatients $inpatients)
    {
        $inpatiens = Inpatiens::all();
        dd($inpatiens);
        return view('admin.borrow.show',compact('admin.borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Inpatients $inpatients)
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
    public function update(Request $request, Inpatients $inpatients)
    {
        $request->validate([
            'id_pasien'=>'required',
            'id_kamar'=>'required',
            'tanggal_penerimaan'=>'required',
            'tanggal_dismisi'=>'required',
            'lab_no'=>'required',
        ]);
            Inpatients::where('id', $inpatients->id)
            ->update([
                'id_pasien'=>$request->id_pasien,
                'id_kamar'=>$request->id_kamar,
                'tanggal_penerimaan'=>$request->tanggal_penerimaan,
                'tanggal_dismisi'=>$request->tanggal_dismisi,
                'lab_no'=>$request->lab_no
            ]);
        // $pasien->update($request->all());

        return redirect()->route('admin.borrow.index')
        ->with('success','Patients update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inpatients $inpatients)
    {
        // $inpatiens->delete();
        Inpatients::destroy($inpatients->id);
        return redirect()->route('admin.borrow.index')
        ->with('success','Patients deleted successfully');
    }
}
