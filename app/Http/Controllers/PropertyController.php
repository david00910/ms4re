<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\PropertyCategories;
use Illuminate\Database;
use Exception;

class PropertyController extends Controller
{
    public function __construct()
    {

    }

    protected function indexData()
    {
        try {
            $property = Property::with('files')->with('propertycategories')->orderBy('created_at', 'ASC')->paginate(12);
            $response = [
                'pagination' => [
                    'total' => $property->total(),
                    'per_page' => $property->perPage(),
                    'current_page' => $property->currentPage(),
                    'last_page' => $property->lastPage(),
                    'from' => $property->firstItem(),
                    'to' => $property->lastItem()
                ],
                'data' => $property
            ];
        }
        catch (Exception $e) {
            return response()->json([
                'status' => $e
            ], 400);
        }

        return response()->json(
          $response, 200
        );
    }
}