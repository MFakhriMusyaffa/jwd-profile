<?php

namespace App\Http\Controllers;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('portofolios.index', compact('portofolios'));
    }

    public function create()
    {
        return view('portofolios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $portofolio = new Portofolio();
        $portofolio->title = $request->title;
        $portofolio->description = $request->description;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portofolio_images', 'public');
            $portofolio->image = $path;
        }

        $portofolio->save();

        return redirect()->route('portofolios.index')->with('success', 'Portofolio created successfully.');
    }

    public function show(Portofolio $portofolio)
    {
        return view('portofolios.show', compact('portofolio'));
    }

    public function edit(Portofolio $portofolio)
    {
        return view('portofolios.edit', compact('portofolio'));
    }

    public function update(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $portofolio->title = $request->title;
        $portofolio->description = $request->description;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portofolio_images', 'public');
            $portofolio->image = $path;
        }

        $portofolio->save();

        return redirect()->route('portofolios.index')->with('success', 'Portofolio updated successfully.');
    }

    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();
        return redirect()->route('portofolios.index')->with('success', 'Portofolio deleted successfully.');
    }

}
