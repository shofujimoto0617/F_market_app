@extends('admin.admin_master')

@section('admin')

    <div class="row" style="padding: 20px;">
        <div class="col-md-6">
            <form method="post" action="{{ route('admin.genre.create') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Genre Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ジャンル</th>
                <th>状態</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
            <tr>
                <td>{{ $genre['name'] }}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection