<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryPortofolio;

class CategoryPortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = CategoryPortofolio::all();
        return response()->json([
        'message' => 'Berhasil mengambil semua data category',
        'data' => $category
    ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    $validated = $request->validate([
        'name_category' => 'required|string|max:50|unique:category_portofolios,name_category',
    ]);

    $category = CategoryPortofolio::create($validated);
    return response()->json([
        'message' => 'Berhasil, membuat category',
        'data' => $category
    ], 201);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(categoryPortofolio::findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, string $id)
        {
            $category = CategoryPortofolio::findOrFail($id);
            $validated = $request->validate([
                'name_category' => 'required|string|max:50|unique:category_portofolios,name_category',
            ]);

            $category->update($validated);
            return response()->json([
                'message' => 'Berhasil, mengupdate category',
                'data' => $category
            ], 200);
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CategoryPortofolio ::findOrFail($id)->delete();
        return response()->json([
            'message' => 'Berhasil, menghapus category'
        ], 200);
    }
}
