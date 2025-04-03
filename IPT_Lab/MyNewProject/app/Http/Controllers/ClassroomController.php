<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Http\Requests\ClassroomRequest;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        return response()->json(Classroom::all());
    }

    public function store(ClassroomRequest $request)
    {
        $classroom = classroom::create($request->validated());
        return response()->json($classroom, 201);
    }

    public function show(classroom $classroom)
    {
        return response()->json($classroom);
    }

    public function update(ClassroomRequest $request, classroom $classroom)
    {
        $classroom->update($request->validated());
        return response()->json($classroom);
    }

    public function destroy(classroom $classroom)
    {
        $classroom->delete();
        return response()->json(null, 204);
    }
}
