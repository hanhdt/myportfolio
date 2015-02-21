<?php
/**
 * Created by PhpStorm.
 * User: Hanh
 * Date: 21/02/2015
 * Time: 2:11 SA
 */

use Illuminate\Database\Seeder;
use App\ProjectCategory;

class ProjectCategoriesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('projects')->delete();

        ProjectCategory::create(array('name' => 'Drupal module', 'is_active' => 1));
        ProjectCategory::create(array('name' => 'Android', 'is_active' => 1));
        ProjectCategory::create(array('name' => 'Java', 'is_active' => 1));
        ProjectCategory::create(array('name' => 'PHP', 'is_active' => 1));
    }
}
