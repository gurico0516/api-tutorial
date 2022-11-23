<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class ApiController extends Controller {
    public function getAllStudents() {
        $students = Student::get()->toJson(JSON_PRETTY_PRINT);

        return response($students, 200);
    }

    public function createStudent(Request $request) {
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save;

        return response()->json([
            "message" => "student record created"
        ], 201);
    }

    public function getStudent($id) {
    }

    public function updateStudent(Request $request, $id) {
    }

    public function deleteStudent($id) {
    }
}
