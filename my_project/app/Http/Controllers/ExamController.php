<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        return response()->json(Exam::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'exam_type_id' => 'required|exists:exam_types,exam_type_id',
            'course_id' => 'required|exists:courses,course_id',
            'date' => 'required|date'
        ]);

        $exam = Exam::create($validated);
        return response()->json($exam, 201);
    }

    public function show(Exam $exam)
    {
        return response()->json($exam);
    }

    public function update(Request $request, Exam $exam)
    {
        $validated = $request->validate([
            'exam_type_id' => 'required|exists:exam_types,exam_type_id',
            'course_id' => 'required|exists:courses,course_id',
            'date' => 'required|date'
        ]);

        $exam->update($validated);
        return response()->json($exam);
    }

    public function destroy(Exam $exam)
    {
        $exam->delete();
        return response()->json(null, 204);
    }
}
