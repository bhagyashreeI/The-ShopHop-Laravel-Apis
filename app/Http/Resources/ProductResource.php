<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Name' => $this->Name,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'description'=>$this->description,
            'image'=>$this->image==''?'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png':$this->image,
            'InStock' => $this->UnitsInStock>0 ? true:false,
        ];
    }
}
