<?php

namespace App\Http\Controllers;

use App\Http\Resources\DriverCollection;
use App\Http\Resources\DriverResource;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DriverCollection(Driver::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate request JSON
            $data = $request->validate([
                'first_name' => 'required|string|min:2',
                'last_name' => 'required|string|min:2',
                'nationality' => 'required|string',
                'age' => 'required|int',
                'team_id' => 'required|int'
            ]);
            // Create team
            $team = Driver::create($data);
            // Return response
            return response()->json(['message' => 'Driver created successfully', 'data' => $team], 201);
        } catch(ValidationException $ex) {
            // Validation error
            return response()->json(['message' => 'Validation error', 'errors' => $ex->errors()], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        return new DriverResource($driver);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        //
    }
}
