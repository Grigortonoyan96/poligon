<?php

namespace App\Observers;

use App\Models\BlogPost;

class BlogPostObserver
{
    /**
     * Handle the BlogPost "created" event.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return void
     */
    public function created(BlogPost $blogPost)
    {
        echo 'success';
        ?>
        <a href="/blog/admin/category" >click</a>
<?php
    }

    /**
     * @param BlogPost $blogPost
     */
    public function updating(BlogPost $blogPost)
    {
       /* $test[]=$blogPost->isDirty();             //ete tekuz mi tox poxvel e cuyc kta true
        $test[]=$blogPost->isDirty('is_published');  // stugum enq voreve tox poxvel e te voch
        $test[]=$blogPost->isDirty('user_id');       //
        $test[]=$blogPost->getAttribute('is_published');   // ays erkusi mijocov karox enq tesnel
        $test[]=$blogPost->is_Published;                     // arden popoxvac arjeq@
        $test[]=$blogPost->getOriginal('is_published');  // ays toxi mijocov kstananq naxqin arjeq@
        dd($test);*/

        //aystex karox enq naev logika grel
    }


    /**
     * Handle the BlogPost "updated" event.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return void
     */
    public function updated(BlogPost $blogPost)
    {
        dd($blogPost);
    }

    /**
     * Handle the BlogPost "deleted" event.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return void
     */
    public function deleted(BlogPost $blogPost)
    {
        //
    }

    /**
     * Handle the BlogPost "restored" event.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return void
     */
    public function restored(BlogPost $blogPost)
    {
        //
    }

    /**
     * Handle the BlogPost "force deleted" event.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return void
     */
    public function forceDeleted(BlogPost $blogPost)
    {
        //
    }
}
