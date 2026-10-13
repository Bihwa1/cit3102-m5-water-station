<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\WaterStation;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StationController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        #Step 4 
        $query = WaterStation::query();

        $allowedFilters = [
            "Customer_id",
            "Customer_name",
            "Water_type",
            "Total_volume_delivered",
            "Payment"

        ];

        foreach ($allowedFilters as $filter) {
            if (request()->has($filter)) {
                $query->where($filter, request($filter));
            }
        }
        #is a variable
        $waterStations = $query->get();
        return response()->json($waterStations);
        ////
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['message' => 'User registered successfully',  'user' => $user,
            'token' => $token], 201);
    }

     public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        // Check user email
        $user = User::where('email', $fields['email'])->first();

        // Check password match
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response()->json([
                'message' => 'Bad credentials'
            ], 401);
        }

        // Generate dynamic token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token
        ], 200);
    }

    public function logout(Request $request)
    {
        // Delete token to revoke access
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logged out successfully'
        ], 200);
    }

     public function me(Request $request)
    {
        return response()->json($request->user());
    }

    /**
     * Display the specified resource.
     */





    public function show(string $water_station)
    {
        #is a table
        return response()->json($water_station);
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
