<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function masakan()
    {
        return $this->belongsTo(Masakan::class, 'category_id');
    }
    public function musik()
    {
        return $this->belongsTo(Musik::class, 'category_id');
    }
    public function pakaian()
    {
        return $this->belongsTo(Pakaian::class, 'category_id');
    }
    public function rumah()
    {
        return $this->belongsTo(Rumah::class, 'category_id');
    }
    public function tari()
    {
        return $this->belongsTo(Tari::class, 'category_id');
    }
}
