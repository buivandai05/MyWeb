@extends('layouts.app')

@section('title', 'Danh sách Khách Hàng')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Danh sách Khách Hàng</h2>
        <a href="{{ route('khach-hang.create') }}" class="btn btn-success">+ Thêm mới</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($khachHangs as $kh)
                <tr>
                    <td>{{ $kh->id }}</td>
                    <td>{{ $kh->name }}</td>
                    <td>{{ $kh->contact }}</td>
                    <td>{{ $kh->email }}</td>
                    <td>
                        <a href="{{ route('khach-hang.edit', $kh->id) }}" class="btn btn-primary btn-sm">Sửa</a>
                        <form action="{{ route('khach-hang.destroy', $kh->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection