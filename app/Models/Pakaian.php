<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakaian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function budaya()
    {
        return $this->belongsTo(Budaya::class, 'budaya_id');
    }
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
    public function comment()
    {
        return $this->hasMany(Comment::class, 'pakaian_id');
    }
    public function scopeSearch($query, $search)
    {
        return $query->where('pakaian_name', 'like', '%' . $search . '%');
    }
}
