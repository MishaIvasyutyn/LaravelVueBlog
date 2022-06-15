<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

/** @mixin \App\Models\Tag */
class TagResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'label' => Str::ucfirst($this->label),
//            'articles_count' => $this->articles_count,
//            'articles' => ArticleResource::collection($this->whenLoaded('articles')),
        ];
    }
}
