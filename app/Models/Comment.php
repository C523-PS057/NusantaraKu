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

    public function budaya()
    {
        $this->belongsTo(Budaya::class, 'budaya_id');
    }

    public function masakan()
    {
        return $this->belongsTo(Masakan::class, 'masakan_id');
    }
    public function musik()
    {
        return $this->belongsTo(Musik::class, 'musik_id');
    }
    public function pakaian()
    {
        return $this->belongsTo(Pakaian::class, 'pakaian_id');
    }
    public function rumah()
    {
        return $this->belongsTo(Rumah::class, 'rumah_id');
    }
    public function tari()
    {
        return $this->belongsTo(Tari::class, 'tari_id');
    }
}
