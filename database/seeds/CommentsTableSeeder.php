<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Blog;
use App\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Factory::create();
        $comments=[];
        $blogs=Blog::all();
        foreach($blogs as $blog)
        {

            for($i=1 ; $i<= rand(1,10); $i++){
                $commentDate =$blog->created_at->modify("+{$i}hours");
                $comments[]=[
                    'user_name'=> $faker->name,
                    'user_email'=> $faker->email,
                    'user_url'=> $faker->domainName,
                    'comment'=> $faker->paragraph(rand(1,5),true),
                    'blog_id'=> $blog->id,
                    'created_at'=>$commentDate,
                    'updated_at'=>$commentDate,

                ];
            }
        }
        Comment::truncate();
        Comment::insert($comments);
    }
}
