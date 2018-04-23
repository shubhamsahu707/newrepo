<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table='tbl_mamberpayments';
    protected $fillable = [
         'txnID', 'member_id','payType', 'creaditBalance','payDate','paid'
    ];
}
