<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\View\View;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $courses = Course::pluck('name','id');
        return view('batches.create')->with('courses',$courses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Batch::create($input);
        return redirect()->route('batchesindex')->with('success','Batches created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batches = Batch::find($id);
        return view('batches.show')->with('batch', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batches = Batch::find($id);
        $courses = Course::pluck('name','id');
        return view('batches.edit')->with('batch', $batches)->with('courses',$courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = Batch::find($id);
        $update = $request->all();
        $input->update($update);
        return back()->with('success','Batches updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Batch::destroy($id);
        return view('batches.index');
    }
}
