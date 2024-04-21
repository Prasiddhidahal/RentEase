<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DropDownLocationController extends Controller
{
    public static function getCities()
    {
        $cities = DB::table('cities')
            ->get();
        
        return $cities;
    }

    /**
     * return states list.
     *
     * @return json
     */
    // public static function getAreas(Request $request)
    // {
    //     $area = DB::table('areas')
    //         ->where('city_id', $request->country_id)
    //         ->get();
        
    //     if (count($area) > 0) {
    //         return response()->json($area);
    //     }
    // }
    public function getAreas(Request $request)
{
    $areas = DB::table('areas')
        ->where('city_id', $request->input('city_id'))
        ->get();
    
    return response()->json($areas);
}
}
