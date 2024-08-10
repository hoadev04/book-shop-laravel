@extends('admin.layout')
@section('title', 'Sản phẩm')
@section('content')

<div class="main-content">
    <h3 class="title-page">
        Sản phẩm
    </h3>
    <div class="d-flex justify-content-end">
        <a href="{{route('addProduct')}}" class="btn btn-primary mb-2">Thêm sản phẩm</a>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        @if (Session('error'))
        <div class="alert alert-danger">
            {{ Session('error') }}
        </div>
        @endif
        @if (Session('success'))
        <div class="alert alert-success">
            {{ Session('success') }}
        </div>
        @endif
        <thead>
            <tr>
                <th class="col-2">Image</th>
                <th class="col-2">Name</th>
                <th class="col-1">Price</th>
                <th class="col-3">Description</th>
                <th class="col-2">Category</th>
                <th class="col-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>
                <td class="col-2"><img src="images/{{$item -> image}}" width="100px"></td>
                <td class="col-2">{{$item -> name}}</td>
                <td class="col-1">{{$item -> price}}</td>
                <td class="col-3">{{$item -> description}}</td>
                <td class="col-2">{{$item -> category->name}}</td>
                <td class="col-2">
                    <form action="{{ route('destroyProduct', $item->id) }}" method="POST">
                        <a class="btn btn-warning" href="{{ route('editProduct', $item->id) }}"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th class="col-2">Image</th>
                <th class="col-2">Name</th>
                <th class="col-1">Price</th>
                <th class="col-3">Description</th>
                <th class="col-2">Category</th>
                <th class="col-2">Action</th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection