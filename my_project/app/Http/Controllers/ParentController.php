<?php

namespace App\Http\Controllers;

use App\Models\ParentModel;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        return response()->json(ParentModel::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:parents,email',
            'phone' => 'nullable|string|max:20'
        ]);

        $parent = ParentModel::create($validated);
        return response()->json($parent, 201);
    }

    public function show(ParentModel $parent)
    {
        return response()->json($parent);
    }

    public function update(Request $request, ParentModel $parent)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:parents,email,' . $parent->id,
            'phone' => 'nullable|string|max:20'
        ]);

        $parent->update($validated);
        return response()->json($parent);
    }

    public function destroy(ParentModel $parent)
    {
        $parent->delete();
        return response()->json(null, 204);
    }
}
