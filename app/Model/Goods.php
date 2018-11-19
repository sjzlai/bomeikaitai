<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    protected $table = 'goods';
    protected $guarded = [];
    public  $timestamps = true;


    public function AllList()
    {
        return self::where('status',0)->get();
    }

    public function productInfo($goods_id)
    {
        return self::where('id','=',$goods_id)->first();
    }
}
