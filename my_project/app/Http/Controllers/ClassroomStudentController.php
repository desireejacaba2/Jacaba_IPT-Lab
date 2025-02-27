<?php

namespace App\Http\Controllers;

use App\Models\ClassroomStudent;
use Illuminate\Http\Request;

class ClassroomStudentController extends Controller
{
    public function index()
    {
        return response()->json(ClassroomStudent::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'classroom_id' => 'required|exists:classroom,classroom_id',
            'student_id' => 'required|exists:student,student_id'
        ]);

        $classroomStudent = ClassroomStudent::create($validated);
        return response()->json($classroomStudent, 201);
    }

    public function show(ClassroomStudent $classroomStudent)
    {
        return response()->json($classroomStudent);
    }

    public function update(Request $request, ClassroomStudent $classroomStudent)
    {
        $validated = $request->validate([
            'classroom_id' => 'required|exists:classroom,classroom_id',
            'student_id' => 'required|exists:student,student_id'
        ]);

        $classroomStudent->update($validated);
        return response()->json($classroomStudent);
    }

    public function destroy(ClassroomStudent $classroomStudent)
    {
        $classroomStudent->delete();
        return response()->json(null, 204);
    }
}
