<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{

    public function index()
    {
        $items = Item::all();
        return view("items.index", compact("items"));
    }

    public function itemAdd(Request $request)
    {
        $item = new Item();
        $item->suppID = $request->input('suppID');
        $item->itemName = $request->input('itemName');
        $item->itemDesc = $request->input('itemDesc');
        $item->itemStock = $request->input('itemStock');


        $item->save();

        $items = Item::all();
        return view("items.index", compact("items"));
    }

    public function itemDetail($id)
    {
        $item = Item::where('itemID', $id)->firstOrFail();
        return view('items.details', compact("item"));
    }

    public function itemUpdate(Request $request, $id)
    {
        $item = Item::where('itemID', $id)->firstOrFail();
        $item->suppID = $request->input('suppID');
        $item->itemName = $request->input('itemName');
        $item->itemDesc = $request->input('itemDesc');
        $item->itemStock = $request->input('itemStock');
        $item->save();

        return view('items.details', compact('item'));
    }

    public function itemDelete($id)
    {
        $item = Item::where('itemID', $id)->firstOrFail();
        $item->delete();

        $items = Item::all();
        return view('items.index', compact('items'));

    }
}
