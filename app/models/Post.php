<?php

use Carbon\Carbon;

class Post extends Eloquent
{
    protected $table='posts';

    public static $rules = [
        'title' => 'required|max:100',
        'body' => 'required|max:1000'
    ];


    // Created Accessor

    public function getCreatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }

    public function getUpdatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago')->diffForHumans();
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

}