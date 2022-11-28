<?php

namespace App\Http\Resources;

use App\Models\ClassModel;
use App\Models\StudentModel;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
          'id'=>$this->id,
          'name'=>$this->name,
          'class_id'=>$this->class_id,
          'classes'=>$this->whenLoaded('classes'),
          'count'=>($this->relationLoaded('classes')) ? $this->classes->count() : "false"
        ];
    }
}
