<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations= Registration::orderBy("created_at","desc")->paginate(10);
        return view("registrations.index", compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("registrations.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreRegistrationRequest $request)
    public function store(Request $request)
    {
        Registration::create($request->except(['_token']));
        return redirect()->route("registrations.index")->with("success","Added new registration");
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        return view("registrations.show", compact('registration'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        return view("registrations.edit", compact('registration'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateRegistrationRequest $request, Registration $registration)
    public function update(Request $request, Registration $registration)
    {
       $registration->update($request->except(['_token']));
       return redirect()->route("registrations.show", $registration)->with("success","updated new registration");
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        $registration->delete();
        return redirect()->route('registrations.index')
        ->with('success', 'Registration deleted successfully');
        //
    }
}
