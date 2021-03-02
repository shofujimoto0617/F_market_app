@extends('user.user_master')

@section('user')

    <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-5 pt-5">
        <img src="{{ (!empty($item['profile_photo_path']))? url('upload/item_images/'.$item['profile_photo_path']):url('backend/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
        <h4><a href="{{ url('f_maket/item/'.$item['id']) }}">{{ $item['name'] }}</a></h4>
        <p>{{ $item['explanation'] }}</p>
        <h5 class="venobox review-link">¥{{ number_format($price_tax) }} (tax price)</h5>
        <a href="{{ route('user.home') }}" class="mb-5 btn btn-primary">Back</a>
        </div>
    </div>

@endsection