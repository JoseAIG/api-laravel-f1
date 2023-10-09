<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarCollection;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // team_id query parameter
        $team_id = $request->query('team_id');
        if ($team_id) {
            return new CarCollection(Car::where('team_id', $team_id)->get());
        }
        
        // Car list
        return new CarCollection(Car::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate request JSON
            $data = $request->validate([
                'model' => 'required|string',
                'manufacturer' => 'required|string',
                'year' => 'required|int',
                'power' => 'required|int',
                'engine' => 'required|string',
                'team_id' => 'required|int',
            ]);
            // Create car
            $team = Car::create($data);
            // Return response
            return response()->json(['message' => 'Car created successfully', 'data' => $team], 201);
        } catch(ValidationException $ex) {
            // Validation error
            return response()->json(['message' => 'Validation error', 'errors' => $ex->errors()], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return new CarResource($car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
