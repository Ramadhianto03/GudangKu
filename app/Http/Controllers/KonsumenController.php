<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use App\Http\Requests\StoreKonsumenRequest;
use App\Http\Requests\UpdateKonsumenRequest;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('konsumen', [
            "konsumens" => Konsumen::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Konsumen $konsumen,Request $requestKonsumen)
    {
        $data = $requestKonsumen->all();
        // dd($data);
        $konsumen->create($data);
        return redirect('/konsumen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKonsumenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Konsumen $konsumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konsumen $konsumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKonsumenRequest $request, Konsumen $konsumen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konsumen $konsumen)
    {
        //
    }
}
