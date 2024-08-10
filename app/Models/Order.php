<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $appends = ['totalPrice'];

    protected $fillable = [
        'name', 
        'phone', 
        'address', 
        'payment_method', 
        'buy_date',  
        'status', 
        'token', 
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function detail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function getTotalPriceAttribute() {
        $total = 0;

        foreach($this->detail as $item) {
            $total += $item->price * $item->quantity;
        }

        return $total;
    }
}
