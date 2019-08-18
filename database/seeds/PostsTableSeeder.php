<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Blog;
use App\User;
use App\Category;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        DB::table('blog')->truncate();

        //generate 10 dummy post
        $post =[];
        $faker = Factory::create();

        for ($i = 1;$i <= 30;$i++){
            $image = 'Post_Image_'.rand(1,5).".jpg";
            $date = date("Y-m-d H:i:s",strtotime('2019-01-18 08:00:00 +{$i} days'));
            $postArray = Blog::create([
                'user_id'=>rand(1,3),
                'post_tittle'=>$faker->sentence(rand(8,12)),
                'category_id'=>rand(1,4),
                'view_count'=>rand(8,12),
                //'excerpt'=>$faker->text(rand(250,300)),
                //'body'=>$faker->paragraphs(rand(10,15)),
                'post_descripition'=>$faker->sentence(rand(8,12)),
               // 'slug'=>$faker->slug(),
                'post_photo' =>rand(0,1) ==1?$image:NULL,
            ]);

        }

    }
}
