<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::orderBy('id', 'desc')->get();
        return view('student.list', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create(
            [
                'name' => request()->name,
                'email' => request()->email,
                'phone' => request()->phone
            ]
        );
        return redirect('/student');
    }

    public function create()
    {
        return view('student.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $student = Student::find($id);
        $student->update(
            [
                'name' => request()->name,
                'email' => request()->email,
                'phone' => request()->phone,
            ]
        );
        return redirect('/student');
    }
    
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/student');
    }
}