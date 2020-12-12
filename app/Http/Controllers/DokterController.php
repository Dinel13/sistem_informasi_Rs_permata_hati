<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataDokter = Dokter::all();
        dd($dataDokter);

        return view('admin.dokter.index', compact('dataDokter'));
        // $dataDokter = DB::table('dokters')->get();
    
        // (Opstion) return view('admin.dokter.index', ['dokter'=> $dokters]);
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
        $dataDokter = Dokter::all();
        dd($dataDokter);
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
            'id_dokter'=>'required',
            'nama'=>'required',
            'umur'=>'required',
            'gender'=>'required',
            'alamat'=>'required',
            ]);

            Dokter::where('id',$dokter->id)
            ->update([
                'nama'=>$request->nama,
                'umur'=>$request->umur,
                'gender'=>$request->gender,
                'alamat'=>$request->alamat
            ]);

        // $dokter->update($request->all());

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
        // $dokter->delete();

        Dokter::destroy($dokter->id);

        return redirect()->route('admin.borrow.index')
        ->with('success','Dokter deleted successfully');
    }
}
