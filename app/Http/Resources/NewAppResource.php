<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewAppResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "client_id" => $this->client_id,
            "client_secret" => $this->client_secret,
            'redirect_uri' => $this->redirect_uri,
            "scopes" => json_decode($this->scopes, true)

        ];
    }
}