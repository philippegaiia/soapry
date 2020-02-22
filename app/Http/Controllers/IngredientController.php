<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\IngredientCategory;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ingredients = Ingredient::all();

        $ingredients = Ingredient::orderBy('code')->get();

        return view('ingredients.index', compact('ingredients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = IngredientCategory::all();
        $ingredient = new Ingredient();
        return view('ingredients.create', compact('categories', 'ingredient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Ingredient::create($this->validateRequest());

        return redirect('ingredients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        return view('ingredients.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
         $categories = IngredientCategory::all();

         return view('ingredients.edit', compact('categories', 'ingredient'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Ingredient $ingredient)
    {
         $ingredient->update($this->validateRequest());

        return redirect('ingredients/' . $ingredient->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        return redirect('ingredients')->with('message', 'L\'ingrédient a été effacé !');
    }

    private function validateRequest(){

        return request()->validate([
            'code' => 'required|min:2',
            'name' => 'required',
            'inci' => 'required',
            'ingredient_category_id' => 'required',
            'comments' => 'nullable',
            'active' => 'required',
            'cas' => 'nullable',
            'einecs' => 'nullable',

        ]);
    }
}
