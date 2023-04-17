<?php

namespace App\Http\Resources;
use App\Product;


use Illuminate\Http\Resources\Json\JsonResource;

class CartItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
     
       $product = Product::find($this->product_id);
     
        return [
            'CartItemId' => $this->id,
            'productID' => $this->product_id,
            'SKU' => $product->sku,
            'price' => $product->price,
            'picture'=>$product->image==''?'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png':$product->image,
            'Name' => $product->Name,
            'Quantity' => $this->quantity,
        ];
    }
}
