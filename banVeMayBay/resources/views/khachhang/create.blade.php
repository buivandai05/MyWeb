@extends('layouts.app')

@section('title', 'Thêm Khách Hàng')

@section('content')
    <h2>Thêm Khách Hàng</h2>

    <form action="{{ route('khach-hang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Tên</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>SĐT</label>
            <input type="text" name="contact" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="{{ route('khach-hang.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
@endsection