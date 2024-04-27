<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    public $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'price' => 10.99,
            'description' => 'This is the first product description.'
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'price' => 20.49,
            'description' => 'This is the second product description.'
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'price' => 15.75,
            'description' => 'This is the third product description.'
        ],
        [
            'id' => 4,
            'name' => 'Product 4',
            'price' => 8.99,
            'description' => 'This is the fourth product description.'
        ],
        [
            'id' => 5,
            'name' => 'Product 5',
            'price' => 12.25,
            'description' => 'This is the fifth product description.'
        ]
    ];
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return response()->json([
            "message" => "Display all products"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $image = $request->images;
        // // for local
        // // Storage::disk('local')->put('upload.local', $image);
        // // for public
        // Storage::disk('public')->put('/upload.public', $image );

        return response()->json([
            "message" => "Product created successfully" 
        ]);
    
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display product with ID: " .$id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Display product with ID: " . $id ." Updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Display product with ID: " . $id ." deleted successfully"
        ]);
    }

    public function uploadImagePublic (Request $request){
        $image = $request->images;
         Storage::disk('public')->put('/upload.public', $image );
         return response()->json([
            "message" => "Image successfully stored in public disk driver."
        ]);
    }
}


