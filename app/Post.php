<?php
/**
 * Created by PhpStorm.
 * User: Chicky-PC
 * Date: 11/23/2015
 * Time: 10:20 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content','author_id','category_id'];

    public $timestamps = true;

    public function Author(){
        return $this->belongsTo('User', 'author_id');
    }
}