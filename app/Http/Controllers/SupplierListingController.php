<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Supplier;
use App\Ingredient;
use Illuminate\Http\Request;

class SupplierListingController extends Controller
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
    public function create(Supplier $supplier)
    {
        $categories = Ingredient::all();

        $listing = new Listing();

        return view('suppliers.listings.create', compact('supplier', 'listing', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Supplier $supplier, Listing $listing)
    {
         $data = request()->validate([
            'ingredient_id' => 'required',
            'code' => 'required',
            'name' => 'required',
            'bio' => 'required',
            'active' =>'required',
            'comments' => 'nullable',
        ]);

        $data['supplier_id'] = $supplier->id;

        $listing = Listing::create($data);

        return redirect()->route('suppliers.listings.create', [$supplier])->with('message', 'Un ingrédient a été ajoutée');
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

    // public function validateRequest(){
    //     return request()->validate([
    //         'ingredient_id' => 'required',
    //         'supplier_id' => 'required',
    //         'code' => 'required',
    //         'name' => 'required',
    //         'bio' => 'required',
    //         'active' =>'required',
    //         'comments' => 'nullable',
    //     ]);
    //  }
}
