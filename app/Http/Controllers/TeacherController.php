<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers = Teacher::all();
        return view('teachers.index')->with('teachers',$teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect()->route('teachersindex')->with('success', 'teacher added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $teacher = Teacher::find($id);
        return view('teachers.show')->with('teacher',$teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit')->with('teacher',$teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = Teacher::find($id);
        $input = $request->all();
        $teacher->update($input);
        return redirect()->route('teachersindex')->with('success','Teacher updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::destroy($id);
        return back();
    }
}
