<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class ApiController extends Controller {
    public function getAllStudents(Request $request) {
        // logic to get all students goes here
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save;
    }

    public function createStudent(Request $request) {
        // logic to create a student record goes here
    }

    public function getStudent($id) {
        // logic to get a student record goes here
    }

    public function updateStudent(Request $request, $id) {
        // logic to update a student record goes here
    }

    public function deleteStudent($id) {
        // logic to delete a student record goes here
    }
}
