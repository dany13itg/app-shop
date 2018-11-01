<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
	//$imageProduct->product
   public function product() {

    	return $this->belongsTo(product::class);

    }
}
