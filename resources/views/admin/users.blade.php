@extends('admin.layout')
@section('title', 'Thành Viên')
@section('content')

<div class="main-content">
    <h3 class="title-page">
        Thành viên
    </h3>
    <div class="d-flex justify-content-end">
        <a href="" class="btn btn-primary mb-2">Thêm thành viên</a>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>UserName</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $use)
            <tr>
                <td>{{ $use->name}}</td>
                <td>{{ $use->email}}</td>
                <td>{{ $use->phone}}</td>
                <td>{{ $use->username}}</td>
                <td>{{ $use->role}}</td>
                <td>
                    <a class="btn btn-warning" href=""><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                </td>

            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>UserName</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection