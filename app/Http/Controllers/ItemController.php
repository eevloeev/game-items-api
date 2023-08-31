<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Models\Item;
use Illuminate\Http\Response;

class ItemController extends Controller
{
    public function store(StoreItemRequest $request)
    {
        // Get validated data from request
        $validatedData = $request->validated();

        // Create item
        $item = Item::create($validatedData);

        // Return success response
        return response()->json($item, Response::HTTP_CREATED);
    }

    public function index()
    {
        // Get items
        $items = Item::paginate(25);

        // Return success response
        return response()->json($items, Response::HTTP_OK);
    }
}
