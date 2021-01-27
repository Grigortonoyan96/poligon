<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[];

        $cName='no category';
        $categories[]=[
          'title'       => $cName,
          'parent_id'   => 0,
        ];
        for($i=1;$i<=10;$i++){
            $cName  =   'category #' . $i;
            $parentId   =($i>4) ? rand(1,4) :1;

            $categories[]=[
                'title'     =>      $cName,
                'parent_id' =>      $parentId,
            ];
        }
        \DB::table('blog_categories')->insert($categories);
    }
}
