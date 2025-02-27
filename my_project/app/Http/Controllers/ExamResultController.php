<?php

namespace App\Http\Controllers;

use App\Models\ExamResult;
use Illuminate\Http\Request;

class ExamResultController extends Controller
{
    public function index()
    {
        return response()->json(ExamResult::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'exam_id' => 'required|exists:exam,exam_id',
            'student_id' => 'required|exists:student,student_id',
            'marks' => 'required|string|max:45'
        ]);

        $examResult = ExamResult::create($validated);
        return response()->json($examResult, 201);
    }

    public function show(ExamResult $examResult)
    {
        return response()->json($examResult);
    }

    public function update(Request $request, ExamResult $examResult)
    {
        $validated = $request->validate([
            'exam_id' => 'required|exists:exam,exam_id',
            'student_id' => 'required|exists:student,student_id',
            'marks' => 'required|string|max:45'
        ]);

        $examResult->update($validated);
        return response()->json($examResult);
    }

    public function destroy(ExamResult $examResult)
    {
        $examResult->delete();
        return response()->json(null, 204);
    }
}
