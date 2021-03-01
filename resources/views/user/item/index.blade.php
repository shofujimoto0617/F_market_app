@extends('user.user_master')

@section('user')
    <div class="item pt-5 mt-5">
    @foreach ($items as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ (!empty($item['profile_photo_path']))? url('upload/item_images/'.$item['profile_photo_path']):url('backend/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4><a href="{{ url('f_maket/item/'.$item['id']) }}">{{ $item['name'] }}</a></h4>
            <p>{{ $item['explanation'] }}</p>
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
        </div>
    @endforeach
    </div>
@endsection