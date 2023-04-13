<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Models\Siswa;
use App\Models\Rombel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Siswa::with('rombel', 'rayon')->paginate(3);
        return view('pages.kesiswaan.siswa.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rombels = Rombel::all();
        $datas = Rayon::all();
        return view('pages.kesiswaan.siswa.create', compact('rombels', 'datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Siswa::create($request->all());
       return redirect()->route('siswa.index')->with('success', 'Berhasil Menyimpan !');
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
        $rombels = Rombel::all();
        $rayons = Rayon::all();
        $datas = Siswa::find($id);
        return view('pages.kesiswaan.siswa.edit', compact('datas', 'rombels', 'rayons'));
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
        $datas = Siswa::findorfail($id);
        $datas->update($request->all());
        return redirect('siswa/index')->with('toast_success', 'successfully Update');;
        
        $datas->jk = $request->input('jk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Siswa::findOrFail($id);
        $datas->delete();
        return redirect('siswa/index');
    }
}
