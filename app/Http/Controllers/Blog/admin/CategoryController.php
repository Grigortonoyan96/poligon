<?php

namespace App\Http\Controllers\Blog\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogPostUpdateRequest;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Repositories\BlogCategoryRepository;
use Illuminate\Http\Request;



class CategoryController extends BaseController
{
    private $blogCategoryRepository;

    public function __construct()
    {
        parent::__construct();

        $this->blogCategoryRepository = new BlogCategoryRepository();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= BlogPost::withTrashed()->get();
        $items = $this->blogCategoryRepository->getCategories(5);
        dd(collect($item), collect($items));
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
    public function store(BlogPostUpdateRequest $request)
    {
       /* \DB::table('blog_posts')->insert([
            'user_id' => $request->user_id,
            'category_id'   => $request->category_id,
            'title' => $request->title,
            'content_raw'   => $request->content_raw,
            'content_html'   => $request->content_html,
        ]);*/
        $create=$request->except(['_method', "_token"]);

        $category = $this->blogCategoryRepository->createCategory($create);

      /*  $comment = $post->create([
            'category_id'   => request('category_id'),
            'title' => request('title'),
            'content_raw'   => request('content_raw'),
            'content_html'   => request('content_html'),
            'user_id' => $request->user_id,]);*/

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
        $item=$this->blogCategoryRepository->getEdit($id);

        // $this->blogCategoryRepository->getForComboBox();
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

        //$result=BlogPost::find($id);
        $this->blogCategoryRepository->updateCategory($id, $request);

        /*if($result){
            $result->fill(
                ['title'  =>  $request->title ,
                    'category_id' => $request->category_id,
                ])->save();
            return back()
                ->with(['success'=>'Changes are dune well']);
        }
        else {
            return back()->withInput()->withErrors(['msg' => "this id[{$id}] doesn't find"]);
        }*/

        /*$update=$request->all();




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }
    public function destroy($id)
    {
        $this->blogCategoryRepository->deleteCategory($id);

        return redirect()->route('blog.admin.categories.index');
    }
}
