<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChampionshipCollection;
use App\Models\Championship;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ChampionshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ChampionshipCollection(Championship::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate request JSON
            $data = $request->validate([
                'year' => 'required|int',
                'driver_name' => 'required|string',
                'team_name' => 'required|string',
                'points' => 'required|numeric',
            ]);
            // Create team
            $team = Championship::create($data);
            // Return response
            return response()->json(['message' => 'Championship created successfully', 'data' => $team], 201);
        } catch(ValidationException $ex) {
            // Validation error
            return response()->json(['message' => 'Validation error', 'errors' => $ex->errors()], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Championship $championship)
    {
        dd($championship);
    }

    public function showByYear($year)
    {     
        $championship = Championship::where('year', $year)->first();

        if ($championship) {
            return response()->json($championship);
        } else {
            return response()->json(['error' => 'Championship not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Championship $championship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Championship $championship)
    {
        //
    }
}
