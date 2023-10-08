<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeamCollection;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new TeamCollection(Team::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate request JSON
            $data = $request->validate([
                'name' => 'required|string|min:2',
                'logo' => 'required|string',
                'engine' => 'required|string',
            ]);
            // Create team
            $team = Team::create($data);
            // Return response
            return response()->json(['message' => 'Team created successfully', 'data' => $team], 201);
        } catch(ValidationException $ex) {
            // Validation error
            return response()->json(['message' => 'Validation error', 'errors' => $ex->errors()], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
        return new TeamResource($team);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
