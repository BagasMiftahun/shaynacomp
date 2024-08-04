<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectClient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'occupation',
        'name',
        'avatar',
        'logo',
    ];

    public function testimonials(){
        return $this->hasMany(Testimonial::class);
    }
}
