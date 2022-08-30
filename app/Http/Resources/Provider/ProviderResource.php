<?php

namespace App\Http\Resources\Provider;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderResource extends JsonResource
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
            'last_name'     => ucfirst( $this->last_name ),
            'email'         => $this->email,
            'phone'         => $this->phone,
            'rfc'           => $this->rfc,
            'adress'        => $this->adress,
            'status'        => $this->status,
           // 'created_at'    => $this->created_at->format( 'd/m/Y' ),

        ];
    }
}
