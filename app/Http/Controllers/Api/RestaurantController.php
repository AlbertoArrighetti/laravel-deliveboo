<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $typeFilter = $request->query('type');

        $query = Restaurant::with(['types', 'dishes']);

        if ($typeFilter) {
            $query->whereHas('types', function ($query) use ($typeFilter) {
                $query->where('name', $typeFilter);
            });
        }

        $restaurants = $query->paginate(12);

        return response()->json([
            "success" => true,
            "results" => $restaurants,
        ]);
    }
}
