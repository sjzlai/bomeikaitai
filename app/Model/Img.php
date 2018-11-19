<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    //
    protected $table = 'img';
    protected $guarded = [];
    public  $timestamps =true;

    public function ImgAll()
    {
        return self::groupBy('goods_id')->get();
    }
}
