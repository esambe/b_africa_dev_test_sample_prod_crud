<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = true;

    protected $casts = [
        'price' => 'double'
    ];

    protected $fillable = [
        'title',
        'description',
        'price',
        'created_at'
    ];

    public function vendor()
    {
        return $this->belongsTo('App\Models\User', 'vendor_id');
    }
}
