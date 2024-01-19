<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'Orders';
    protected $fillable = [
        'user_id',
        'menu_id',
        'room',
        'total_price',
        'customer_name',
        'date',
        'status',
    ];

    /**
     * Get the menu associated with the order.
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
