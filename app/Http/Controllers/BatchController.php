<?php

namespace App\Http\Controllers;

use App\Batch;
use App\Product;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }

    public function index()
    {
        // $planned = Batch::planned()->get();
        // $confirmed = Batch::confirmed()->get();

        $batches = Batch::all();

        return view('batches.index', compact('batches'));
    }

    public function create()
    {
        $products = Product::all();
        $batch = new Batch();// creazte empty array
        return view('batches.create', compact('products', 'batch'));
    }

    public function store()
    {
        Batch::create($this->validateRequest());

        return redirect('batches');
    }

    public function show(Batch $batch)
    {
        // $batch = Batch::findOrFail($batch);
        return view('batches.show', compact('batch'));
    }

    public function edit(Batch $batch)
    {
        $products = Product::all();
        return view('batches.edit', compact('batch', 'products'));
    }

    public function update(Batch $batch)
    {
        $batch->update($this->validateRequest());

        return redirect('batches/' . $batch->id);
    }

    public function destroy(Batch $batch){

        $batch->delete();

        return redirect('batches');
    }

    private function validateRequest(){

        return request()->validate([
            'number' => 'required|min:2',
            'temp' => 'required',
            'status' => 'required',
            'product_id' => 'required'
        ]);
    }
}
