<?php

namespace App\Http\Controllers;

use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index($firstname, $lastname) {

        $student = new Student ($firstname, $lastname);

        return view('student', ['student' => $student]);
    }
}
