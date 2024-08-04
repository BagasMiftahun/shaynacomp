<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyAbout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'thumbnail',
        'name',
        'type',
    ];

    public function keypoints(){
        return $this->hasMany(CompanyKeyPoint::class);
    }
}
