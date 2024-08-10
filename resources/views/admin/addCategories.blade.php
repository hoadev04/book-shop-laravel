@extends('admin.layout')
@section('title', 'Thêm danh mục')
@section('content')

<div class="main-content">
    <h3 class="title-page">
        Thêm danh mục
    </h3>

    <form class="addPro" action="{{route ('storeCategory')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên danh mục:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên danh mục">
        </div>
        
        <div class="form-group">
            <input type="hidden" name="id" id="categoryId">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection