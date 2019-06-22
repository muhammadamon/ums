<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class TeacherController extends Controller
{
     public function index()
    {
    	$teachers = Teacher::All();
    	return view('students.index', ['teachers' => $teachers]);

    }
}
