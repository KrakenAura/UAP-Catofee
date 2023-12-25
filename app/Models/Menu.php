<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'menu',
        'harga'
    ];

    /**
     * Get the orders associated with the menu.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
