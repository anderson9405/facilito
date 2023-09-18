<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Record::all();
        dd($records);
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
        $record = new Record;

        $record->price = $request->price;
        $record->quantity = $request->quantity;
        $record->sale_id = $request->sale_id;
        $record->product_id = $request->product_id;
        if($record->save()){
            //redireccionar a la vista index
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $record = Record::find($id);
        dd($record);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $record = Record::find($id);
        dd($record);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = new Record;

        $record->price = $request->price;
        $record->quantity = $request->quantity;
        $record->sale_id = $request->sale_id;
        $record->product_id = $request->product_id;
        if($record->save()){
            //redireccionar a la vista index
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = Record::find($id);
        $record->delete();
    }
}
