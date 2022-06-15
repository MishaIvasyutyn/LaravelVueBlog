<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    public $dates = ['published_at'];
    protected $fillable = ['title', 'body', 'image', 'slug'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function state()
    {
        return $this->hasOne(State::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getDataForHumans($value = null)
    {
        if ($value == 'published_at') {
            $time = $this->published_at;
        } else {
            $time = $this->created_at;
        }
        return $time->diffForHumans();
    }

    public function getBodyPreview()
    {
        return Str::limit($this->body, 100);
    }

    public function scopeLastLimit($query, $number)
    {
        return $query->orderBy('created_at', 'desc')->limit($number)->get();
    }
    public function scopeAllPaginate($query, $number)
    {
        return $query->orderBy('created_at', 'desc')->paginate($number);
    }
    public function scopefindBySlug($query, $slug){
        return $query->where('slug', $slug)->firstOrFail();
    }
}
