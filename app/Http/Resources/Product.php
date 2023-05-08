<?php
  
namespace App\Http\Resources;
   
use Illuminate\Http\Resources\Json\JsonResource;
   
class Product extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'brand' => $this->brand,
            'mark' => $this->mark,
            'category_id' => $this->category_id,
            'status' => $this->status,
            'discount' => $this->discount,
            'material' => $this->material,
            'model' => $this->model,
            'color' => $this->color,
        ];
    }
}
