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
        // $batches = Batch::where('status', 'Planifié')->get();

       // dd($batches);

        return view('batches.index', compact('batches'));
    }

    public function create()
    {
        $batches = Batch::all();
        $products = Product::all();
        $lastBatch = Batch::orderBy('id', 'desc')->first()->id;
        $batch = new Batch();// creazte empty array
        return view('batches.create', compact('products', 'batch', 'batches','lastBatch'));
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
        $batches = Batch::all();
        $lastBatch = Batch::orderBy('id', 'desc')->first()->id;
        $products = Product::all();
        return view('batches.edit', compact('batch', 'products', 'batches', 'lastBatch'));
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
            'status' => 'required',
            'product_id' => 'required',
            'produced' => 'required',
            'production_date' => 'required|date',
            'ready_date' => 'required|date',
            'oil_weight' => 'required|numeric',
            'units' => 'required',

        ]);
    }
}
