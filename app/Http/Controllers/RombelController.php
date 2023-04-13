<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    public function index()
    {
        $rombels = Rombel::all();
        return view('pages.kesiswaan.rombel.index', compact('rombels'));
    }

    public function create()
    {
        $rombels = Rombel::all();
        return view('pages.kesiswaan.rombel.create');
    }

    public function store(Request $request)
    {
        Rombel::create($request->all());
        return redirect()->route('rombel.index')->with('success', 'Berhasil Menyimpan !');
    }

    public function edit($item)
    {
        $rombels = Rombel::all();
        $item = Rombel::find($item);
        return view('pages.kesiswaan.rombel.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $rombels = Rombel::findorfail($id);
        $rombels->update($request->all());
        return redirect('rombel/index')->with('toast_success', 'successfully Update');
    }

    public function destroy($id)
    {
        $rombels = Rombel::findOrFail($id);
        $rombels->delete();
        return redirect('rombel/index');
    }
}
