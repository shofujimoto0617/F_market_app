@extends('admin.admin_master')

@section('admin')

    <table class="table">
        <thead>
            <tr>
                <th>商品ID</th>
                <th>商品名</th>
                <th>税抜価格</th>
                <th>ジャンル</th>
                <th>ステータス</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td><a href="{{ url('item/show/'.$item['id']) }}">{{ $item['name'] }}</a></td>
                <td>{{ $item['price'] }}</td>
                <td>{{ $item->genre->name }}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection