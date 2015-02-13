<?php
/**
 * Created by PhpStorm.
 * User: Chicky-PC
 * Date: 2/13/2015
 * Time: 9:07 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'about';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'milestone', 'image'];
}