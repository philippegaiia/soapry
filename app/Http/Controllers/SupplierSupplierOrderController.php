<?php

namespace App\Http\Controllers;

use App\Supplier;
use Carbon\Carbon;
use App\SupplierOrder;
use Illuminate\Http\Request;

class SupplierSupplierOrderController extends Controller
{
     public function create(Supplier $supplier)
    {
        $order = new SupplierOrder();

        $order->order_date = new Carbon();
        $order->delivery_date = new Carbon();

        return view('suppliers.supplier_orders.create', compact('supplier', 'order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Supplier $supplier, SupplierOrder $supplierOrder)
    {
         $data = request()->validate([
            'order_ref' => 'required',
            'order_date' => 'required|date|before_or_equal:today',
            'delivery_date' => 'required|date|after_or_equal:order_date',
            'confirmation_no' => 'nullable',
            'invoice_no' => 'nullable',
            'bl_no' => 'nullable',
            'status' =>'required',
            'comments' => 'nullable',
            'amount' => 'nullable',
        ]);

        $data['supplier_id'] = $supplier->id;

        $supplierOrder = SupplierOrder::create($data);

        return redirect()->route('supplier_orders.show', [$supplierOrder])->with('message', 'Une commande a été créée');
    }

    public function edit(Supplier $supplier, SupplierOrder $supplierOrder)
    {
        $order = $supplierOrder;
        // dd($order);
        return view('suppliers.supplier_orders.edit', compact('supplier', 'order'));
    }

    public function update(Supplier $supplier, SupplierOrder $supplierOrder)
    {

        $data = request()->validate([
            'order_ref' => 'required',
            'order_date' => 'required|date',
            'delivery_date' => 'required|date|after_or_equal:order_date',
            'confirmation_no' => 'nullable',
            'invoice_no' => 'nullable',
            'bl_no' => 'nullable',
            'status' =>'required',
            'comments' => 'nullable',
            'amount' => 'nullable',
         ]);

        $supplierOrder->update($data);

        return redirect()->route('supplier_orders.show', [$supplierOrder])->with('message', 'La commande a été modifiée');
    }
}
