<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KhachHang extends Model
{
    use HasFactory;

    protected $table = 'khach_hangs';

    protected $fillable = [
        'name',
        'contact',
        'email',
    ];

    public function ves(){
        return $this->hasMany(Ve::class, 'ma_kh', 'id');
    }
}