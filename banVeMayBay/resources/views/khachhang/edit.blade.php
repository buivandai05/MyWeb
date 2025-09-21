@extends('layouts.app')

@section('title', 'Sửa Khách Hàng')

@section('content')
    <h2>Sửa Khách Hàng</h2>

    <form action="{{ route('khach-hang.update', $khach->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Tên</label>
            <input type="text" name="name" value="{{ $khach->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>SĐT</label>
            <input type="text" name="contact" value="{{ $khach->contact }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $khach->email }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('khach-hang.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
@endsection