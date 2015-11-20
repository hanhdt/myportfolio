<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	// the variable that sets the table name
    // if it's empty, the class name will be determined plural lowercase table name
    protected $table = 'photos';

    // the variable that sets which columns can be edited
    protected $fillable = ['title', 'image'];

    // rules of the image upload form
    public static $upload_rules = array(
        'title' => 'required|min:3',
        'image' => 'required|image'
    );

    public $timestamps = true;
}
