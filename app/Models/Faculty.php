<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function batches() {
        return $this->hasMany(Batch::class);
    }
}
