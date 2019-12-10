<?php

namespace App\Http\Resources\Review;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ReviewCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'customer'=>$this->customer,
            'review'=>$this->review,
            'star' =>$this->star,
            'href'=> [
                'product link'=> route('products.show',$this->product_id),
                'full review'=> route('reviews.show',[$this->product_id, $this->id ])
            ]
        ];
    }
}
