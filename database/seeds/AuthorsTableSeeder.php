<?php
use Illuminate\Database\Seeder;
use App\Author;
class AuthorsTableSeeder extends Seeder {
    public function run(){
        DB::table('authors')->delete();
        
        Author::create(array('name' => 'Lauren', 'surname' => 'Oliver'));
        Author::create(array('name' => 'Stephen', 'surname' => 'Mayer'));
        Author::create(array('name' => 'Dan', 'surname' => 'Brown'));
    }
}