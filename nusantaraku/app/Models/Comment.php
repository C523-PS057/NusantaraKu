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
        $this->belongsTo(User::class, 'user_id');
    }

    public function masakan()
    {
        $this->belongsTo(Masakan::class, 'category_id');
    }
    public function musik()
    {
        $this->belongsTo(Musik::class, 'category_id');
    }
    public function pakaian()
    {
        $this->belongsTo(Pakaian::class, 'category_id');
    }
    public function rumah()
    {
        $this->belongsTo(Rumah::class, 'category_id');
    }
    public function tari()
    {
        $this->belongsTo(Tari::class, 'category_id');
    }
}
