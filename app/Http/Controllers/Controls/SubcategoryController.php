<?php

namespace App\Http\Controllers\Controls;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Controls\SubcategoryRequest;
use \Illuminate\Database\QueryException;
use App\Models\Category;

class SubcategoryController extends Controller
{
    public function create($id, Request $request)
    {
        $category = Category::find($id);

        return view('controls.subcategories.create', [
            'category' => $category
        ]);
        
    }

    public function store($id, SubcategoryRequest $request)
    {
        $category = Category::find($id);
        
        $subcategory = $category->subcategories()->create($request->validated());
        

        return redirect()->route('controls.categories.index');

    }
    
    public function edit($id, $subId) 
    {
        $category = Category::find($id);
        $subcategory = $category->subcategories()->find($subId);

        return view('controls.subcategories.edit', [
            'category' => $category,
            'subcategory' => $subcategory
        ]);
    }

    public function update($id, $subId, SubcategoryRequest $request)
    {
        $subcategory = Category::find($id)->subcategories()->find($subId);

        if ($subcategory->update($request->validated())){
            return redirect()->route('controls.categories.index');
        } else {
            return redirect()->route('controls.categories.index')->withErrors("Update a subcategory failed!");
        }
    }

    public function destroy($id, $subId, Request $request)
    {
        $subcategory = Category::find($id)->subcategories()->find($subId);
        if ( $subcategory->products()->count() !== 0 ){
            return redirect()->route('controls.categories.index')->withErrors("Subcategory can't be deleted if product relating.");
        } 
        
        $subcategory->delete();
        
        return redirect()
            ->route('controls.categories.index');
    }
}
