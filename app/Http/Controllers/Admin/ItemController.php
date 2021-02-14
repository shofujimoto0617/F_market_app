<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class ItemController extends Controller
{
    public function Item() {
        $items = Item::all();
        return view('admin.item.item_view', compact('items'));
    }

    public function ItemNew() {
        $genres = Genre::all();
        return view('admin.item.item_new', compact('genres'));
    }

    public function ItemCreate(Request $request) {
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/item_images'),$filename);
        }  

        Item::insert([
            'name' => $request->name,
            'explanation' => $request->explanation,
            'genres_id' => $request->genres_id, // リレーション先のIDの取得がわからない
            'price' => $request->price,
            'profile_photo_path' => $filename,
            'created_at' => Carbon::now()
        ]);

             

        return Redirect()->route('admin.item')->with('success', 'Item Created Successfull');
    }
}
