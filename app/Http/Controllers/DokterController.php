<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dokter.index');
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
            'id_dokter'=>'required',
            'nama'=>'required',
            'umur'=>'required',
            'gender'=>'required',
            'alamat'=>'required',
            ]);

            Dokter::create($request->all());

            return redirect()->route('admin.borrow.index')
            
                ->with('success','Dokter created succesfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        return view('admin.borrow.show',compact('admin.borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokter $dokter)
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
    public function update(Request $request, Dokter $dokter)
    {
        $request->validate([

        ]);

        $dokter->update($request->all());

        return redirect()->route('admin.borrow.index')
        ->with('success','Dokter update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        $dokter->delete();

        return redirect()->route('admin.borrow.index')
        ->with('success','Dokter deleted successfully');
    }
}
