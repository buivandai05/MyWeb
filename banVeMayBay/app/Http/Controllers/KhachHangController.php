<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function index()
    {
        $khachHangs = KhachHang::orderBy('id','desc')->paginate(10);
        return view('khachhang.index', compact('khachHangs'));
    }

    public function create()
    {
        return view('khachhang.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'contact'    => 'nullable|string|max:20',
            'email'  => 'nullable|email|max:255|unique:khach_hangs,email',
        ]);

        KhachHang::create($data);

        return redirect()->route('khach-hang.index')->with('success', 'Thêm khách hàng thành công.');
    }

    public function show($id)
    {
        $khach = KhachHang::findOrFail($id);
        return view('khachhang.show', compact('khach'));
    }

    public function edit($id)
    {
        $khach = KhachHang::findOrFail($id);
        return view('khachhang.edit', compact('khach'));
    }

    public function update(Request $request, $id)
    {
        $khach = KhachHang::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'contact'    => 'nullable|string|max:20',
            'email'  => "nullable|email|max:255|unique:khach_hangs,email,{$khach->id}",
        ]);

        $khach->update($data);

        return redirect()->route('khach-hang.index')->with('success', 'Cập nhật thành công.');
    }

    public function destroy($id)
    {
        $khach = KhachHang::findOrFail($id);
        $khach->delete();

        return redirect()->route('khach-hang.index')->with('success', 'Xóa thành công.');
    }
}