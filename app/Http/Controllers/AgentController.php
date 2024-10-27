<?php

namespace App\Http\Controllers;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agent = Agent::latest()->paginate(10);
        return view('agents.agents',['agent' => $agent]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validation
        $request->validate([
            'name' =>'required|min:5',
            'agency' => 'required|min:5',
            'email' => 'required|unique:agents',
            'contact' =>'required|unique:agents',
            'address' => 'required'
        ]);

        Agent::create($request->all());

        return redirect('/agents');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('agents.overview');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
