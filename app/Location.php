<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function parent(){
        return $this->belongsTo('App\Location', 'parent_id');
    }

    public function children(){
        return $this->hasMany('App\Location', 'parent_id');
    }

    public function locationTree(){
        $root = Location::where('parent_id', null)->get();
        dd($root->children);
    }
}
