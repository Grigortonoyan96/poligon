<?php

namespace App\Http\Controllers\Blog\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogPostUpdateRequest;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=BlogPost::paginate(5);
        return view('blog.posts.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('blog.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::table('blog_posts')->insert([
            'user_id' => $request->user_id,
            'category_id'   => $request->category_id,
            'title' => $request->title,
            'content_raw'   => $request->content_raw,
            'content_html'   => $request->content_html,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=BlogPost::find($id);
        return view('blog.admin.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogPostUpdateRequest  $request, $id)
    {
       /* $updateData = $request->except(['_method', "_token"]);*/

       /* BlogPost::find($id)->update($updateData);*/

//        $blogPost->title = $request->title;
//        $blogPost->category_id = $request->category_id;
//        $blogPost->save();

        //BlogPost::find($id)->update(['title'=>$request->title,'category_id'=>$request->category_id]);
       //$all=$request->all();
        //BlogPost::find($id)->fill($all)->save();

        $result=BlogPost::find($id);


        if($result){
            $result->fill(
                ['title'  =>  $request->title ,
                    'category_id' => $request->category_id,
                ])->save();
            return back()
                ->with(['success'=>'Changes are dune well']);
        }
        else {
            return back()->withInput()->withErrors(['msg' => "this id[{$id}] doesn't find"]);
        }

        /*$update=$request->all();

        BlogPost::find($id)->update($update);*/


// ->With(['success' => 'work']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlogPost::destroy($id);

        return redirect()->route('blog.admin.categories.index');
    }
}
