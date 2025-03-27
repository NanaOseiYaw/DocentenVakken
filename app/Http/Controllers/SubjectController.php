<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $vakken = Subject::with('teacher')->orderBy('name')->get();
        return view('vakken.index', compact('subjects'));
    }
}
