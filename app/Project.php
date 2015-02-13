<?php
/**
 * Created by PhpStorm.
 * User: Chicky-PC
 * Date: 2/13/2015
 * Time: 9:10 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'category', 'description'];
}