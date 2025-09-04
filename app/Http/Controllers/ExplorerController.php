<?php

namespace App\Http\Controllers;

use App\Models\Explorer;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    public function index()
    {
        $explorers = Explorer::orderBy('created_at', 'desc')->paginate(10);
        return view('explorers.index', ["explorers" => $explorers]);
    }

    public function show($id)
    {
        $explorer = Explorer::findOrFail($id);
        return view('explorers.show', ["explorer" => $explorer]);
    }

    public function create()
    {
        return view('explorers.create');
    }

    public function store()
    {
        // --> /ninjas/ (POST)
        // handle POST request to store a new ninja record in table
    }

    public function destroy($id)
    {
        // --> /ninjas/{id} (DELETE)
        // handle delete request to delete a ninja record from table
    }
}
