<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    // TODO: name $ fillable sesuai dengan database
    protected $fillable = [
        'uuid', 'name', 'email', 'number', 'address',
        'transactions_total', 'transactions_status'
    ];

    protected $hidden = [
        
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }

}
