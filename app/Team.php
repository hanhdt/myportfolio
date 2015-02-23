<?php
/**
 * Created by PhpStorm.
 * User: Chicky-PC
 * Date: 2/13/2015
 * Time: 9:02 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'team';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'title', 'avatar', 'birthday', 'facebook', 'linkedIn', 'tweeter', 'brief_description'];
}