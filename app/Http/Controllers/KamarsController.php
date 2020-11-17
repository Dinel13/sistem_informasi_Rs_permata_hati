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
            'id_kamar',
            'tipe',
            'status',['available', 'unvailable'],
            ]);

            kamars::create($request->all());

            return redirect()->route('admin.borrow.index')
            
                ->with('success','kamar created succesfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kamars $kamars)
    {
        return view('admin.borrow.show',compact('admin.borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamars $kamars)
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
    public function update(Request $request, kamars $kamars)
    {
        $request->validate([

        ]);

        $kamars->update($request->all());

        return redirect()->route('admin.borrow.index')
        ->with('success','kamars update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamars $kamars)
    {
        $kamars->delete();

        return redirect()->route('admin.borrow.index')
        ->with('success','kamars deleted successfully');
    }
}
