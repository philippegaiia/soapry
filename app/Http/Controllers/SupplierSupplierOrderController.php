<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\SupplierOrder;
use Illuminate\Http\Request;

class SupplierSupplierOrderController extends Controller
{
     public function create(Supplier $supplier)
    {
        $order = new SupplierOrder();

        $order->order_date = now();

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
            'order_date' => 'required|date',
            'delivery_date' => 'required|date|after_or_equal:order_date',
            'confirmation_no' => 'nullable',
            'invoice_no' => 'nullable',
            'bl_no' => 'nullable',
            'status' =>'required',
            'comments' => 'nullable',
        ]);

        $data['supplier_id'] = $supplier->id;

        $listing = SupplierOrder::create($data);

        return redirect()->route('suppliers.supplier_orders.create', [$supplier])->with('message', 'Une commande a été créée');
    }
}
