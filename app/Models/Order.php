<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'order_number', 'user_id', 'status', 'grand_total', 'item_count', 'payment_status', 'payment_method',
        'first_name', 'last_name', 'email', 'address', 'city', 'country', 'post_code', 'phone_number', 'notes'
    ];

    public function customeruser()
    {
        return $this->belongsTo(Customeruser::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

}
