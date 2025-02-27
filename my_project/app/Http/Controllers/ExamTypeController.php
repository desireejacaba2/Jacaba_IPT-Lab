<?php

namespace App\Http\Controllers;

use App\Models\ExamType;
use Illuminate\Http\Request;

class ExamTypeController extends Controller
{
    public function index()
    {
        return response()->json(ExamType::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:45',
            'desc' => 'nullable|string|max:255'
        ]);

        $examType = ExamType::create($validated);
        return response()->json($examType, 201);
    }

    public function show(ExamType $examType)
    {
        return response()->json($examType);
    }

    public function update(Request $request, ExamType $examType)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:45',
            'desc' => 'nullable|string|max:255'
        ]);

        $examType->update($validated);
        return response()->json($examType);
    }

    public function destroy(ExamType $examType)
    {
        $examType->delete();
        return response()->json(null, 204);
    }
}
