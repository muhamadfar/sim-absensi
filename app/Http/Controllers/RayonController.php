<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rayon;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rayons = Rayon::get();
        return view('pages.kesiswaan.rayon.index', compact('rayons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kesiswaan.rayon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rayon::create($request->all());
       return redirect()->route('rayon.index')->with('success', 'Berhasil Menyimpan !');
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
        $rayons = Rayon::find($id);
        return view('pages.kesiswaan.rayon.edit', compact('rayons'));
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
        $rayons = Rayon::findorfail($id);
        $rayons->update($request->all());
        return redirect('rayon/index')->with('toast_success', 'successfully Update');;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rayons = Rayon::findOrFail($id);
        $rayons->delete();
        return redirect('rayon/index');
    }
}
