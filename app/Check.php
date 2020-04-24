<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $guarded = [];

    public function path() {

        return route('checks.show', $this);
    }

    public function book() {

        return $this->belongsTo(Book::class);
    }

    public function user() {

        return $this->belongsTo(User::class);
    }
}