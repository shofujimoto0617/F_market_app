<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class UserItemController extends Controller
{
    public function ItemShow($id) {
        $item = Item::find($id);
        $price = $item->price;
        $price_tax = $price * 1.10;

        return view('user.item.show', compact('item', 'price_tax'));

    }

    public function ItemIndex() {
        $items = Item::all();

        return view('user.item.index', compact('items'));
    }
}
