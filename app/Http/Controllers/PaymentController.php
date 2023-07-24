<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Course::all();
        return view('payments.index')->with('enrollments',$payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payments = Payment::pluck('enroll_no','id');
        return view('payments.create')->with('payments',$payments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment = $request->all();
        Payment::create($payment);
        return back()->with('success','Payments successfully done!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payments = Payment::find($id);
        return view('payments.show')->with('payments',$payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payments = Payment::find($id);
        return view('payments.edit')->with('payments',$payments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = Payment::find($id);
        $update = $request->all();
        $input::update($update);
        return back()->with('success','payment successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::destroy($id);
        return redirect()->route('paymentsindex')->with('success','Payment deleted successfully!');
    }
}
