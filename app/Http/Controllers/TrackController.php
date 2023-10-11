<?php

namespace App\Http\Controllers;

use App\Http\Resources\TrackCollection;
use App\Http\Resources\TrackResource;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new TrackCollection(Track::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate request JSON
            $data = $request->validate([
                'name' => 'required|string',
                'location' => 'required|string',
                'length' => 'required|numeric',
                'fastest_lap' => 'required|string',
            ]);
            // Create track
            $team = Track::create($data);
            // Return response
            return response()->json(['message' => 'Track created successfully', 'data' => $team], 201);
        } catch(ValidationException $ex) {
            // Validation error
            return response()->json(['message' => 'Validation error', 'errors' => $ex->errors()], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        return new TrackResource($track);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
    }
}
