<?php

namespace App\Http\Controllers;

use App\Formula;
use App\Product;
use App\Ingredient;
use App\FormulaItem;
use Illuminate\Http\Request;

class FormulaController extends Controller
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
    public function create()
    {
        $products = Product::all();
        $ingredients = Ingredient::all();

        $formula = new Formula();

        return view('formulas.create', compact('products', 'ingredients', 'formula'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
        // Store Formula
        //$formula = Formula::create($this->validateRequest());

        $formula = Formula::create($request->formula);

        //dd($formula);

        for ($i = 0; $i < count($request->ingredient); $i++)
        {
            if (isset($request->percent[$i]) && isset($request->ingredient[$i]))
            {
                FormulaItem::create([
                    'formula_id' => $formula->id,
                    'ingredient_id' => $request->ingredient[$i],
                    'percent' => $request->percent[$i],

                ]);
            }
        }

        return('Created');
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

    // private function validateRequest(){

    //     return request()->validate([
    //         'formula[status]' => 'required',
    //         'formula[product_id]' => 'required',
    //         'formula[code]' => 'nullable',
    //         'formula[application_date]' => 'required|date',
    //         'formula[name]' => 'nullable',
    //         'formula[dip]' => 'required',
    //     ]);
    // }

     private function validateRequest(){

        return request()->validate([
            'formula.status' => 'required',
            'formula.product_id' => 'required',
            'formula.code' => 'required',
            'formula.application_date' => 'required|date',
            'formula.name' => 'required',
            'formula.dip' => 'required',
        ]);
    }
}
