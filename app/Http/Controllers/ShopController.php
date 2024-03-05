<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopRequest;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Bestellingen;
use Illuminate\Support\Facades\Auth;

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

        return redirect()->route('shop.index')->with('success', "Item is succesvol toegevoegd in winkelwagen!");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $inventory = Inventory::where('id', $request->input('inventory_id'))->first();

        $nieuwe_bestelling = Bestellingen::create($request->all());
        $nieuwe_bestelling->inventory_id = $inventory->id;
        $nieuwe_bestelling->user_id = $user->id;
        $nieuwe_bestelling->save();

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
