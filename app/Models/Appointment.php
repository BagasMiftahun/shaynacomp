<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phone_number',
        'meeting_at',
        'email',
        'budget',
        'brief',
        'product_id',
    ];

    protected $casts = [
        'meeting_at' => 'date'  //Format date
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
