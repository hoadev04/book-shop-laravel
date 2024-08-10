@extends('admin.layout')
@section('title', 'Danh Mục')
@section('content')

<div class="main-content">
    <h3 class="title-page">
        Danh mục
    </h3>
    <div class="d-flex justify-content-end">
        <a href="{{route('addCategory')}}" class="btn btn-primary mb-2">Thêm danh mục</a>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        @if (Session::has('thongbao'))
        <div class="alert alert-success">
            {{ Session::get('thongbao') }}
        </div>
        @endif
        <thead>
            <tr class="text-center">
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $cate)
            <tr class="text-center">
                <td>{{$cate -> name}}</td>
                <td>
                    <form action="{{ route('destroyCategory', $cate->id) }}" method="POST">
                        <a class="btn btn-warning" href="{{ route('editCategory', $cate->id) }}"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</button>
                    </form>
                   
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="text-center">
                <th>Name</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection