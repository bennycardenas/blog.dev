<?php

class Post extends BaseModel

{
    protected $table ='posts';

    protected $rules = [
        'title' => 'required|max:100',
        'body' => 'required|max:1000'
    ];

    // Created Accessor
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    // Link to User model.
    public function user()
    {
        return $this->belongsTo('User');
    }

}