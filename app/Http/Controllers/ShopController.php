<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopRequest;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Bestellingen;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Inventory::all();
        return view('shop.index', ['items' => $items]);
    }

    public function createproduct()
    {
        return view('shop.createproduct');
    }

    public function storeproduct(ShopRequest $request)
    {
        $inventories = Inventory::create($request->all());

        $imageName = time().'.'.$request->picture->extension();
        $request->picture->storeAs('public/images', $imageName);

        $inventories->picture = $imageName;
        $inventories->save();

        return redirect()->route('shop.storeproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'itemName' => 'required|string',
            'price' => 'required|numeric',
            'amount' => 'required|integer',
            'name' => 'required|string',
        ]);

        $shopitem = new Bestellingen();
        $shopitem->itemName = $request->input('itemName');
        $shopitem->price = $request->input('price');
        $shopitem->amount = $request->input('amount');
        $shopitem->name = $request->input('name');

        $shopitem->user_id = Auth::id();

        $shopitem->save();

        return redirect()->route('shop.index')->with('success', 'Item ordered successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $shopitem = Inventory::findOrFail($id);

        if (!$shopitem) {
            return 'Oops! Item not found.';
        }

        return view('shop.show', ['shopitem' => $shopitem]);
    }

    // Other methods (create, edit, update, destroy) remain unchanged.
}
