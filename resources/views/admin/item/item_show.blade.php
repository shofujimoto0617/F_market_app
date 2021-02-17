@extends('admin.admin_master')

@section('admin')

    <h3>Item Show</h3>
    <div class="col-md-4">
        <img src="{{ (!empty($item['profile_photo_path']))? url('upload/item_images/'.$item['profile_photo_path']):url('upload/no_image.jpg') }}" class="card-img-top">
    </div>

    <div class="col-md-4">
        <div class="mb-5">
            <p>Item Name</p>
            {{ $item['name'] }}
        </div>

        <div class="mb-5">
            <p>Item Explanation</p>
            {{ $item['explanation'] }}
        </div>

        <div class="mb-5">
            <p>Item Genre</p>
            {{ $item->genre->name }}
        </div>

        <div class="mb-5">
            <p>Item Price</p>
            {{ $item['price'] }}
        </div>
        
        <div class="mb-5">
            <p>Status</p>
        </div>
    </div>


@endsection