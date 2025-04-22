<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function show(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Data successfully',
            'data' => [
                [
                    'title' => 'Carots',
                    'image' => "https://cafeandbooks.wordpress.com/wp-content/uploads/2015/07/dscn4570.jpg"
                ],
                [
                    'title' => 'Carots',
                    'image' => "https://cafeandbooks.wordpress.com/wp-content/uploads/2015/07/dscn4570.jpg"
                ],
            ],
        ]);
    }
}
