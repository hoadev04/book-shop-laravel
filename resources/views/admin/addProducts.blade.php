@extends('admin.layout')
@section('title', 'Tin tức')
@section('content')

<div class="main-content">
    <h3 class="title-page">
        Thêm sản phẩm
    </h3>

    <form class="addPro" action="{{route ('storeProduct')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="exampleInputFile">Ảnh sản phẩm</label>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
            </div>
        </div>
        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="categories">Danh mục:</label>
            <select class="form-select" name="category_id" aria-label="Default select example">
                @foreach($categories as $cate)
                <option value="{{$cate->id}}">{{$cate->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="price">Giá </label>
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" name="price" id="price" class="form-control" placeholder="Nhập giá gốc">
            </div>
        </div>
        
        <div class="form-group">
            <label>Mô tả chi tiết</label>
            <textarea class="form-control" name="description" rows="3" placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;"></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" >
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection