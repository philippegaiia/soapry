<?php

namespace App\Http\Controllers;

use App\Supply;
use App\SupplierOrder;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class SupplierOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = SupplierOrder::orderByDesc('order_date')->get();

        return view('supplier_orders.index', compact('orders'));

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
    public function show(SupplierOrder $supplierOrder)
    {
        // $supplierOrder = SupplierOrder::findOrFail($id);
        // $supplies = Supply::all();
        $supplies = Supply::where('supplier_order_id', $supplierOrder->id)->get();

        return view('supplier_orders.show', compact('supplierOrder', 'supplies'));
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
    public function destroy(SupplierOrder $supplier_order)
    {
        $supplier_order->delete();

        return redirect('supplier_orders')->with('message', 'La commande a été effacée');
    }
}
