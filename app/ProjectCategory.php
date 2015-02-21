<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'is_active'
    ];

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
