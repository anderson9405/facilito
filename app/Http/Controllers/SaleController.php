<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::all();
        dd($sales);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale = new Sale;
        $sale->amount = $request->amount;
        $sale->user_id = $request->user_id;
        if($sale->save()){
            //redireccionar a la vista index
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = Sale::find($id);
        dd($sale);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sale = Sale::find($id);
        dd($sale);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sale = new Sale;
        $sale->amount = $request->amount;
        $sale->user_id = $request->user_id;
        if($sale->save()){
            //redireccionar a la vista index
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sale = Sale::find($id);
        $sale->delete();
    }
}
