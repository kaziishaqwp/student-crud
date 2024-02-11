<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

public function store(Request $request)
{
    Student::create($request->all());
    return redirect()->route('students.index')->with('success','Student added successfully.');
}

public function update(Request $request, Student $student)
{
    $student->update($request->all());
    return redirect()->route('students.index')->with('success','Student updated successfully.');
}

public function destroy(Student $student)
{
    $student->delete();
    return redirect()->route('students.index')->with('success','Student deleted successfully.');
}
