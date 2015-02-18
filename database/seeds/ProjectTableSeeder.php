<?php
/**
 * Created by PhpStorm.
 * User: Hanh
 * Date: 18/02/2015
 * Time: 3:48 CH
 */

use Illuminate\Database\Seeder;
use App\Project;

class ProjectTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('projects')->delete();

        Project::create(array('name' => 'Membership card module', 'category' => 'Drupal module', 'description' => 'Sun Group'));

        Project::create(array('name' => 'P2A game', 'category' => 'Android game', 'description' => 'Passenger to Asian'));

        Project::create(array('name' => 'Benefit approval module', 'category' => 'Drupal module', 'description' => 'Sun Group'));

        Project::create(array('name' => 'Contact relationship module', 'category' => 'Drupal module', 'description' => 'Sun Group'));

        Project::create(array('name' => 'Document management module', 'category' => 'Drupal module', 'description' => 'Sun Group'));

        Project::create(array('name' => 'Restaurant support management', 'category' => 'Java web application', 'description' => 'Self-development'));

    }
}
