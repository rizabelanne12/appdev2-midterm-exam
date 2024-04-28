<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Display all products'
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Product created successfully'
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'message' => 'Display product with ID: ' . $id
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => 'Product with ID: ' . $id . ' updated successfully'
        ]);
    }

    public function destroy($id)
    {
        return response()->json([
            'message' => 'Product with ID: ' . $id . ' deleted successfully'
        ]);
    }

    public function uploadImageLocal(Request $request)
    {
        $image = $request->imagess;
        Storage::disk('local')->put('/upload.local', $image );
            return response()->json([
            "message" => "Image successfully stored in local disk driver."
            ]);
    }

    public function uploadImagePublic(Request $request)
    {
        $image = $request->images;
        Storage::disk('public')->put('/upload.public', $image );
        return response()->json([
           "message" => "Image successfully stored in public disk driver."
       ]);
    }
}
