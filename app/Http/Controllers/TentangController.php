<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $dataTen = TentangModel::all();
      return view('mahasiswa.indexkat', compact('dataTen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('mahasiswa.tambahten');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      TentangModel::create($request->all());
      return redirect('tentang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $dataTen = TentangModel::find($id);
      return view('mahasiswa.editten', compact('dataTen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      TentangModel::find($id)->update($request->all());
        return redirect('tentang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      TentangModel::find($id)->delete();
        return redirect('tentang');
    }
}
