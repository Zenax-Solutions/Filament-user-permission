<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class Product extends Model
{
    use HasFactory;
    use HasRoles;

    protected $fillable = [
        'name',
        'main_image',
        'images',
        'description',
        'warranty',
        'price',
        'commission',
        'status',
        'order_by',
        'link',
        'qty',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
