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
        $car = new Car();
        return view('superAdmin.create', compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formdata = $request->validate([
            'make' => ['required', 'string', 'min:3', 'max:50'],
            'model' => ['required', 'string', 'min:3', 'max:50'],
            /* todo to change in date */
            'year' => ['required', 'numeric', 'integer', 'min:0'],
            'engine_fuel_type' => ['required', 'string', 'min:3', 'max:30'],
            'engine_hp' => ['required', 'numeric', 'integer', 'min:0'],
            'engine_cylinders' => ['required', 'numeric', 'integer', 'min:0', 'max:16'],
            'transmission_type' => ['required', 'string', 'min:4', 'max:20'],
            'driven_wheels' => ['required', 'string', 'min:4', 'max:20'],
            'description' => ['required', 'string', 'min:10'],
            'image_url' => ['required', 'url',],

        ]);
        $car = Car::create($formdata);
        return redirect()->route('superAdmin.show', $car->id);
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
        $car = Car::findOrFail($id);
        return view('superAdmin.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formdata = $request->validate([
            'make' => ['required', 'string', 'min:3', 'max:50'],
            'model' => ['required', 'string', 'min:3', 'max:50'],
            /* todo to change in date */
            'year' => ['required', 'numeric', 'integer', 'min:0'],
            'engine_fuel_type' => ['required', 'string', 'min:3', 'max:30'],
            'engine_hp' => ['required', 'numeric', 'integer', 'min:0'],
            'engine_cylinders' => ['required', 'numeric', 'integer', 'min:0', 'max:16'],
            'transmission_type' => ['required', 'string', 'min:4', 'max:20'],
            'driven_wheels' => ['required', 'string', 'min:4', 'max:20'],
            'description' => ['required', 'string', 'min:10'],
            'image_url' => ['required', 'url',],

        ]);
        $car = Car::findOrFail($id);
        $car->update($formdata);
        return redirect()->route('superAdmin.show', $car->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect()->route('superAdmin.index');
    }
}
