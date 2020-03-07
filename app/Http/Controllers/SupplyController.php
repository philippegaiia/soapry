<?php

namespace App\Http\Controllers;

use App\Supply;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplies = Supply::with(['supplierOrder'=> function ($query){
            $query->orderBy('order_date', 'desc');
        }])->get();

        //dd($supplies);

        return view('supplies.index', compact('supplies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Supply $supply)
    {
        $supply->expiry_date = Carbon::now()->addMonths(24);

        return view('supplies.edit', compact('supply'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Supply $supply)
    {
         $data = request()->validate([
            'price' => 'required|numeric',
            'batch' => 'nullable',
            'expiry_date' => 'nullable|date',
            'bl_no' => 'nullable',
            'status' => 'required',
        ]);

        $supply->update($data);

        return redirect()->route('supplier_orders.show', ['supplier_order' => $supply->supplier_order_id])->with('message', 'Un ingrédient a été mùodfié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
