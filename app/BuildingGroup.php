<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuildingGroup extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'num_of_buildings', 'address', 'description', 'project_id'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function buildings()
    {
        return $this->hasMany('App\Building');
    }

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
    public static function boot() {
        parent::boot();

        static::deleting(function($stage) { // before delete() method call this
             $stage->buildings()->delete();
             $stage->image()->delete();
             // do the rest of the cleanup...
        });
    }
}
