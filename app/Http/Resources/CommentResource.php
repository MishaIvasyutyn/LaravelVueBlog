<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Comment */
class CommentResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'subject' => $this->subject,
            'body' => $this->body,
            'created_at' => $this->CreatedForHumans(),
//            'updated_at' => $this->updated_at,
//            'article_id' => $this->article_id,
//            'article' => new ArticleResource($this->whenLoaded('article')),

        ];
    }
}
