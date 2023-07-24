<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Enrollment;
use App\Models\Batch;
use App\Models\Student;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index')->with('enrollments',$enrollments); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enrollment = $request->all();
        Enrollment::create($enrollment);
        return redirect()->route('enrollmentsindex')->with('success','Enrollment Successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollment = Enrollment::find($id);
        return view('enrollments.show')->with('enrollment',$enrollment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollment = Enrollment::find($id);
        $batches = Batch::pluck('name','id');
        $students = Student::pluck('name','id');
        return view('enrollments.edit')->with('enrollment',$enrollment)->with('batches',$batches)->with('students',$students);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = Enrollment::find($id);
        $update = $request->all();
        $input::update($update);
        return redirect()->back()->with('success','Enrollment updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return view('enrollmentsindex');
    }
}
