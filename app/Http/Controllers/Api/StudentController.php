<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentStoreRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection|array
    {
        return Student::query()->get();
    }

    public function store(StudentStoreRequest $request)
    {
        Student::query()->create($request->validated());
        return response()->json(['message' => 'Student created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Student::query()->where('id', $id)->get();
    }

    public function update(StudentStoreRequest $request, string $id)
    {
        $student = Student::query()->find($id);
        $student->update($request->validated());
        return response()->json(['message' => 'Student Update successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $student = Student::query()->find($id);
        $student->delete();
        return response()->json(['message' => 'Student Delete successfully']);
    }
}
