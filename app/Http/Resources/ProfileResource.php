<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'location' => $this->location,
            'age' => $this->age,
            'years_of_experience' => $this->experience,
            'twitter_account' => $this->twitter,
            'facbook_account' => $this->facbook,
            'description' => $this->description,
            'profile_photo_url' => asset($this->profile_photo_path),
        ];
    }
}
