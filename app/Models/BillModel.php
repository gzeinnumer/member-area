<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillModel extends Model
{
    protected $table = 'm_bills';

    public function order()
    {
        return $this->belongsTo(OrderModel::class, 'id_h_orders', 'id');
    }
}
