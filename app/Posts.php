<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model {

		
	public function Comments()
    {
        return $this->hasMany('App\Comments');
    }

    public function Categories()
    {
        return $this->belongsToMany('App\Categories');
    }

}
