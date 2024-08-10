@extends('admin.layout')
@section('title', 'Tin tức')
@section('content')

<div class="main-content">
    <h3 class="title-page">
        Sửa sản phẩm
    </h3>

    <form class="addPro" action="{{ route('updateProduct', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputFile">Ảnh sản phẩm</label>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                <img src="{{ asset('images/'. $product->image)}}" alt="" width="90px" height="60px">
            </div>
            

        </div>
        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="categories">Danh mục:</label>
            <select class="form-select" name="category_id" aria-label="Default select example">
                @foreach($categories as $cate)
                @if($cate->id == $product->category_id)
                <option value="{{ $cate->id}}" selected>{{ $cate->name}}</option>
                @else
                <option value="{{ $cate->id}}">{{ $cate->name}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="price">Giá </label>
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
            </div>
        </div>

        <div class="form-group">
            <label>Mô tả chi tiết</label>
            <textarea class="form-control" name="description" rows="3" style="height: 78px;">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $product->id }}">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection