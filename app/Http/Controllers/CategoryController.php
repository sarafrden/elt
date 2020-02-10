<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function showAllCategories()
    {
        return response()->json(Category::all());
    }

    public function showOneCategory($id)
    {
        return response()->json(Category::find($id));
    }

    public function create(Request $request)
    {
        $Category = Category::create($request->all());

        return response()->json($Category, 201);
    }

    public function update($id, Request $request)
    {
        $Category = Category::findOrFail($id);
        $Category->update($request->all());

        return response()->json($Category, 200);
    }

    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
