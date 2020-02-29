<?php

namespace App\Http\Controllers;

use App\Supply;
use App\Listing;
use Carbon\Carbon;
use App\SupplierOrder;
use Illuminate\Http\Request;

class SupplierOrderSupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SupplierOrder $supplierOrder)
    {
        $supply = new Supply();
        $supply->expiry_date = Carbon::now()->addMonths(24);
        // $supply->expiry_date->add
        $listings = Listing::where('supplier_id', $supplierOrder->id)->get();
        return view('supplier_orders.supplies.create', compact('supplierOrder', 'supply', 'listings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierOrder $supplierOrder, Supply $supply)
    {
         $data = request()->validate([
            'listing_id' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'batch' => 'nullable',
            'expiry_date' => 'nullable|date',
            'bl_no' => 'nullable',
            'status' => 'required',

        ]);

        $data['supplier_order_id'] = $supplierOrder->id;

        $supply = Supply::create($data);

        return redirect()->route('supplier_orders.show', [$supplierOrder])->with('message', 'Une ligne de commande a été créée');
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
        //
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
        //
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
