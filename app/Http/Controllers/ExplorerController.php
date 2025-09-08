<?php

namespace App\Http\Controllers;

use App\Models\Explorer;
use App\Models\Institution;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    public function index()
    {
        $explorers = Explorer::with('institution')->orderBy('created_at', 'desc')->paginate(10);
        return view('explorers.index', ["explorers" => $explorers]);
    }

    public function show(Explorer $explorer)
    {
        // $explorer = Explorer::with('institution')->findOrFail($id);
        $explorer->load('institution');
        return view('explorers.show', ["explorer" => $explorer]);
    }

    public function create()
    {
        $institutions = Institution::all();
        return view('explorers.create', ["institutions" => $institutions]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'institution_id' => 'required|exists:institutions,id',
        ]);

        Explorer::create($validated);

        return redirect()->route('explorers.index')->with('success', 'Explorer created!😁');
    }

    public function destroy(Explorer $explorer)
    {
        // $explorer = Explorer::findOrFail($id);
        $explorer->delete();

        return redirect()->route('explorers.index')->with('success', 'Explorer deleted!😢');
    }

    public function edit(Explorer $explorer) {
        $institutions = Institution::all();
        return view('explorers.edit', compact('explorer', 'institutions'));
    }

    // Update an existing person
    public function update(Request $request, Explorer $explorer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'institution_id' => 'required|exists:institutions,id',
        ]);

        $explorer->update($validated);

        return redirect()->route('explorers.index')->with('success', 'Explorer updated successfully!😊');
    }
}
