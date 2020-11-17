<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboratoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.lab.index');
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
            'lab_no',
            'id_pasien',
            'id_dokter',
            'jenis_tes',
            'tanggal_tes',
            'jumlah',
            ]);

            Laboratories::create($request->all());

            return redirect()->route('admin.borrow.index')
            
                ->with('success','Laboratories created succesfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratories $laboratories)
    {
        return view('admin.borrow.show',compact('admin.borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratories $laboratories)
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
    public function update(Request $request, Laboratories $laboratories)
    {
        $request->validate([

        ]);

        $pasien->update($request->all());

        return redirect()->route('admin.borrow.index')
        ->with('success','Laboratories update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratories $laboratories)
    {
        $laboratories->delete();

        return redirect()->route('admin.borrow.index')
        ->with('success','Laboratories deleted successfully');
    }
}
