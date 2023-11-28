<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musik extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function budaya()
    {
        $this->belongsTo(Budaya::class, 'budaya_id');
    }
    public function province()
    {
        $this->belongsTo(Province::class, 'province_id');
    }
    public function comment()
    {
        $this->hasMany(Comment::class, 'category_id');
    }
}
