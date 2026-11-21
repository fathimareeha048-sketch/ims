<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::latest()->paginate(10);
        return view('leads.index', compact('leads'));
    }

    public function create()
    {
        return view('leads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
    'name' => 'required',
    'phone' => 'required',
    'email' => 'nullable|email',
    'stage' => 'required|in:New,Contacted,Interested,Enrolled,Lost',
]);

        Lead::create($request->all());

        return redirect()->route('leads.index')->with('success', 'Lead added!');
    }

    public function show(Lead $lead)
    {
        return view('leads.show', compact('lead'));
    }

    public function edit(Lead $lead)
    {
        return view('leads.edit', compact('lead'));
    }

    public function update(Request $request, Lead $lead)
    {
        $request->validate([
    'name' => 'required',
    'phone' => 'required',
    'email' => 'nullable|email',
    'stage' => 'required|in:New,Contacted,Interested,Enrolled,Lost',
]);

        $lead->update($request->all());

        return redirect()->route('leads.index')->with('success', 'Lead updated!');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('leads.index')->with('success', 'Lead deleted!');
    }
}