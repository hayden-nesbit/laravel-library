<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    public function path() {

        return route('authors.show', $this);
    }

    public function books() {

        return $this->belongsToMany(Book::class);
    }
}
