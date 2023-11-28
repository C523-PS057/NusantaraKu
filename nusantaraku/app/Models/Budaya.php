<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function masakan()
    {
        return $this->hasMany(Masakan::class, 'budaya_id');
    }
    public function musik()
    {
        return $this->hasMany(Musik::class, 'budaya_id');
    }
    public function pakaian()
    {
        return $this->hasMany(Musik::class, 'budaya_id');
    }
    public function rumah()
    {
        return $this->hasMany(Musik::class, 'budaya_id');
    }
    public function tari()
    {
        return $this->hasMany(Tari::class, 'budaya_id');
    }
}
