<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inventory', [
            "inventories" => Inventory::all()
        ]);
    }

    public function create(Inventory $inventory,Request $requestInventory)
    {
        $data = $requestInventory->all();
        // dd($data);
        $inventory->create($data);
        return redirect('/inventory');
    }

public function delete(Inventory $inventory){
    $inventory->delete();
    return back();
}
    /**
     * Show the form for creating a new resource

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
