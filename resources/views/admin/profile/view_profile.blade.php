@extends('admin.admin_master')

@section('admin')
    <div class="card" style="width: 18rem;">
    <img src="{{ (!empty($adminData['profile_photo_path']))? url('upload/admin_images/'.$adminData['profile_photo_path']):url('upload/no_image.jpg') }}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Admin Name : {{ $adminDate->name }}</h5>
            <p class="card-text">Admin Email: {{ $adminDate->email }}</p>
            <a href="" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
@endsection