<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'order_view';
    protected $fillable = [
        'menu_id',
        'qty',
        'total_price',
        'room',
        'date',
        'customer_name',
        'status',
    ];

    /**
     * Get the menu associated with the order.
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
