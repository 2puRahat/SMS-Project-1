<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function add()
    {
        return view('admin.teacher.add');
    }
    public function manage()
    {
        return view('admin.teacher.manage');
    }
}
