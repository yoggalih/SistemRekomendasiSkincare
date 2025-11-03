<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlowGenius extends Model
{
    //
    use HasFactory;
    protected $table = 'glowgenius';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
