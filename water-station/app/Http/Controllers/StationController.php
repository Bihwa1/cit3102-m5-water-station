<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\WaterStation;

class StationController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        #Step 4 
        $query = WaterStation::query();
        $allowedFilters = ["Customer_id", "Customer_name", "Water_type", "Total_volume_delivered", "Payment"];  
        
        foreach ($allowedFilters as $filter) {
            if (request()->has($filter)) {
                $query->where($filter, request($filter));
            }
        }
        $waterStations = $query->get();
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
