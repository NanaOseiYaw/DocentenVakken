<?php
namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $docenten = Teacher::with('subjects')->orderBy('name')->get();
        return view('docenten.index', compact('teachers'));
    }
}
