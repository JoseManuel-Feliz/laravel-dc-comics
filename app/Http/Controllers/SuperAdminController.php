<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('superAdmin.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superAdmin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $formdata = $request->all();

        $car = new Car();
        $car->name = $formdata['name'];
        $car->brand = $formdata['brand'];
        $car->engine = $formdata['engine'];
        $car->top_speed = $formdata['top_speed'];
        $car->power = $formdata['power'];
        $car->country = $formdata['country'];
        $car->image_url = $formdata['image_url'];
        $car->weight = $formdata['weight'];
        $car->description = $formdata['description'];

        $car->save();

        return redirect()->route('superAdmin.show', ['id' => $car->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('superAdmin.show', compact('car'));
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
