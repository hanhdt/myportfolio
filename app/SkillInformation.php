<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillInformation extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'skills';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];
}
