<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory(1)->create();
        $firstUser =\App\Models\User::factory()->create([
            'name' => 'Safal Shrestha',
            'email' => 'safalstha818@gmail.com',
            'password'=> '123456789'
        ]);

         $personal = Category::create([
             'name'=>'Personal',
             'slug'=>'personal'
         ]);
        $family = Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);
        $work = Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);


        Post::create([
            'title'=>'My Family Post',
            'slug'=>'my-family-post',
            'excerpt'=>'My Family Post Excerpt..........',
            'body'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nunc persequeris aptent minim alia nostrum alienum semper quis nisl sed curae ornatus iuvaret singulis pellentesque principes partiendo ceteros morbi',
            'user_id'=>$firstUser->id,
            'category_id'=>$family->id,
        ]);
        Post::create([
            'title'=>'My Personal Post',
            'slug'=>'my-personal-post',
            'excerpt'=>'My Personal Post Excerpt..........',
            'body'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nunc persequeris aptent minim alia nostrum alienum semper quis nisl sed curae ornatus iuvaret singulis pellentesque principes partiendo ceteros morbi',
            'user_id'=>$firstUser->id,
            'category_id'=>$personal->id,
        ]);
        Post::create([
            'title'=>'My Works Post 2',
            'slug'=>'my-work-post-2',
            'excerpt'=>'My Work Post Excerpt 2..........',
            'body'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nunc persequeris aptent minim alia nostrum alienum semper quis nisl sed curae ornatus iuvaret singulis pellentesque principes partiendo ceteros morbi',
            'user_id'=>$firstUser->id,
            'category_id'=>$work->id,
        ]);
        Post::create([
            'title'=>'My Works Post ',
            'slug'=>'my-work-post',
            'excerpt'=>'My Work Post Excerpt ..........',
            'body'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nunc persequeris aptent minim alia nostrum alienum semper quis nisl sed curae ornatus iuvaret singulis pellentesque principes partiendo ceteros morbi',
            'user_id'=>2,
            'category_id'=>$work->id,
        ]);




    }
}
