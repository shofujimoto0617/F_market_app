@extends('user.user_master')

@section('user')

    <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-5 pt-5">
        <img src="{{ (!empty($item['profile_photo_path']))? url('upload/item_images/'.$item['profile_photo_path']):url('backend/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4><a href="{{ url('f_maket/item/'.$item['id']) }}">{{ $item['name'] }}</a></h4>
            <p>{{ $item['explanation'] }}</p>
            <h5 class="venobox review-link">¥{{ number_format($price_tax) }} <small>(tax price)</small></h5>

            <form method="post" action="{{ route('cartitem.create') }}" enctype="multipart/form-data">
                @csrf
                <div class="dropdown">
                    <select name="quantity">
                        <option value="1">1個</option>
                        <option value="2">2個</option>
                        <option value="3">3個</option>
                        <option value="4">4個</option>
                        <option value="5">5個</option>
                        <option value="6">6個</option>
                        <option value="7">7個</option>
                        <option value="8">8個</option>
                        <option value="9">9個</option>
                        <option value="10">10個</option>
                    </select>
                </div>
                <input type="hidden" value="{{ $item['id'] }}" name="item_id">
                <button type="submit" class="btn btn-primary">Add to cart</button>

            </form>
            <a href="{{ route('user.home') }}" class="mb-5 btn btn-primary">Back</a>
        </div>
    </div>

@endsection