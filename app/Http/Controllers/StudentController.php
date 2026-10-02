<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Thinkie',
                'major' => 'Informatika',
                'age' => 19,
                'courses' => ['Pemrograman Web', 'Database', 'Cloud Computing'],
            ],
            [
                'name' => 'Winkie',
                'major' => 'Sistem Informasi',
                'age' => 18,
                'courses' => ['UI/UX Design', 'Manajemen Proyek', 'IoT'],
            ],
        ];

        return view('students.index', compact('students'));
    }
}