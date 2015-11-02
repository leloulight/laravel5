<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
	protected $fillable = array('id', 'cate_id', 'name');
	protected $guarded = array('price');
	public $timestamps = false;
}
