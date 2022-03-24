<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOrders extends Model
{
    protected $table = "customer_order";
    protected $guarded = [];

    public static function store($order)
    {
        $orders =  CustomerOrders::create($order);
        return $orders;
    }
}
