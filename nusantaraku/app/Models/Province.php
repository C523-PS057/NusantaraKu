<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $with = ['masakan', 'musik', 'pakaian', 'rumah', 'tari'];
    public function masakan()
    {
        return $this->hasMany(Masakan::class, 'province_id');
    }
    public function musik()
    {
        return $this->hasMany(Musik::class, 'province_id');
    }
    public function pakaian()
    {
        return $this->hasMany(Pakaian::class, 'province_id');
    }
    public function rumah()
    {
        return $this->hasMany(Rumah::class, 'province_id');
    }
    public function tari()
    {
        return $this->hasMany(Tari::class, 'province_id');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('province_name', 'like', '%' . $search . '%');
    }
}
