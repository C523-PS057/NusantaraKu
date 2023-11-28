<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function budaya()
    {
        $this->belongsTo(Budaya::class, 'budaya_id');
    }
}
