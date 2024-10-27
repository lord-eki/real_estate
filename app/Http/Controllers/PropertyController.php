<?php

namespace App\Http\Controllers;
use App\Models\Property;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = Property::latest()->paginate(20);
        return view('property.all_properties',['property' => $property]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('property.add_property');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //Validation

      $request->validate([
        'title' => 'required|min:3',
        'type' => 'required',
        'bedrooms' => 'required|integer',
        'bathrooms' => 'required|integer',
        'size' => 'required|integer',
        'price' => 'required',
        'address' => 'required',
        'state' => 'required',
        'zipcode' => 'required',
        'country' => 'required',

      ]);

       Property::create($request->all());

       return redirect('/properties');

    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
         return view('property.property_overview',['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
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
    public function destroy(Property $property)
    {
        $property->delete();
    }


}
