@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="row" style="padding: 20px;">
        <div class="col-md-6">
            <form method="post" action="{{ route('admin.item.create') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Item Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="exampleInputExplanation" class="form-label">Item explanation</label>
                    <input type="text" name="explanation" class="form-control">
                </div>

                <div class="mb-3">
                    <select name="genres_id">
                        @foreach($genres as $index => $genre)
                            <option value="{{ $index }}">{{ $genre['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPrice" class="form-label">Item price</label>
                    <input type="text" name="price" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Item Image</label>
                    <input type="file" class="form-control" name="profile_photo_path" id="image">
                </div>

                <div class="mb-3">
                    <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; height: 100px;">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection