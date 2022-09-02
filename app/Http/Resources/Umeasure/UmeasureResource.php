<?php

namespace App\Http\Resources\Umeasure;

use Illuminate\Http\Resources\Json\JsonResource;

class UmeasureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'name'          => ucfirst( $this->name ),
        ];
    }
}
