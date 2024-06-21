<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FaqModel;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataFaq = FaqModel::all();
        return view('admin/data-faq', compact('dataFaq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahfaq');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FaqModel::create($request->all());
        return redirect('/faq');
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
        $dataFaq = FaqModel::find($id);
        return view('admin.editfaq', compact('dataFaq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        FaqModel::find($id)->update($request->all());
        return redirect('faq');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FaqModel::find($id)->delete();
        return redirect('faq');
    }
}
