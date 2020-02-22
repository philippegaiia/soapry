<?php

namespace App\Http\Controllers;

use App\IngredientCategory;
use Illuminate\Http\Request;

class IngredientCategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = IngredientCategory::all();

        return view('ingredient_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $categories = IngredientCategory::all();
    //     $ingredient_category = new IngredientCategory();
    //     return view('ingredient_categories.create', compact('categories'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        IngredientCategory::create($this->validateRequest());

        return redirect('ingredient_categories');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(IngredientCategory $ingredient_category)
    {
        return view('ingredient_categories.edit', compact('ingredient_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IngredientCategory $ingredient_category)
    {

        $ingredient_category->update($this->validateRequest());

        return redirect('ingredient_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngredientCategory $ingredient_category)
    {
        $ingredient_category->delete();

        return redirect('ingredient_categories');
    }

     private function validateRequest(){

        return request()->validate([
            'code' => 'required|min:3|unique:ingredient_categories',
            'name' => 'required|min:5',
        ]);
    }
}
