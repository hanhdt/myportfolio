<?php
/**
 * Created by PhpStorm.
 * User: Chicky-PC
 * Date: 2/13/2015
 * Time: 2:12 PM
 */

use Illuminate\Database\Seeder;
use App\SkillInformation;

class SkillInformationTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('skills')->delete();

        SkillInformation::create(array('title' => 'E-Commerce & CMS Modules', 'description' => 'Developing CMS modules built on such as Drupal, Laravel'));
        SkillInformation::create(array('title' => 'Mobile Development', 'description' => 'Developing Android app & games; Developing across-platform mobile app;'));
        SkillInformation::create(array('title' => 'Web Development', 'description' => 'Developing Java web-based app, JSP, Google App Engine, Google Web Toolkit, Vaadin; PHP/Laravel framework;'));
        SkillInformation::create(array('title' => 'Desktop Development', 'description' => 'Developing desktop application by Java Swing;'));
    }
}