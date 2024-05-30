<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requirement extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function jobs()
    {
        return $this->hasManyThrough(Job::class, 'requirement_id', 'id');
    }
}