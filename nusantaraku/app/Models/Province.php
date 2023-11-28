<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    public function masakan()
    {
        $this->hasMany(Masakan::class, 'province_id');
    }
    public function musik()
    {
        $this->hasMany(Musik::class, 'province_id');
    }
    public function pakaian()
    {
        $this->hasMany(Pakaian::class, 'province_id');
    }
    public function rumah()
    {
        $this->hasMany(Rumah::class, 'province_id');
    }
    public function tari()
    {
        $this->hasMany(Tari::class, 'province_id');
    }
}
