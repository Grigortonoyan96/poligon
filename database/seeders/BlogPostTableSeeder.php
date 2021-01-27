<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Psy\Util\Str;

class BlogPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Post=[];
        for($i=0;$i<11;$i++){
        $Post[]=[
          'category_id' =>      1,
          'user_id'     =>      1,
          'title'       =>      'mark',
          'excerpt'     =>      'dosn\'t excerpt',
          'content_raw' =>       'right left ',
          'content_html' =>      'right left',
          'is_published' =>      True,
        ];
            \DB::table('blog_posts')->insert($Post);
        }



    }
}
