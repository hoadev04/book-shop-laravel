@extends('admin.layout')
@section('title', 'Sửa danh mục')
@section('content')

<div class="main-content">
    <h3 class="title-page">
        Sửa danh mục
    </h3>

    <form class="addPro" action="{{route ('updateCategory', ['category' => $category->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên danh mục:</label>
            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
        </div>

        <div class="form-group">
            <input type="hidden" name="id" value="{{ $category->id }}">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection