<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class UserItemController extends Controller
{
    public function ItemShow($id) {
        $item = Item::find($id);

        return view('user.item.show', compact('item'));

    }
}
