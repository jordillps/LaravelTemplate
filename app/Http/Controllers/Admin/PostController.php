<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\PostTranslation;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        $users = User::all()->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        return view('admin.posts.create', compact('post','users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $request->validated();


        $post = Post::create([
            'published_at' => $request->get('published_at'),
            'user_id' => $request->get('user_id'),
            'category_id' => $request->get('category_id'), 
        ]);

        $post_translation = PostTranslation::create([
            'post_id' => $post->id,
            'locale' => app()->getLocale(),
            'title' => $request->get('title'),
            'url' => Str::slug($request->get('title')),
            'excerpt' => $request->get('excerpt'),
            'iframe' => $request->get('iframe'),
            'body' => $request->get('body'),
        ]);


        foreach ($request->input('images', []) as $file) {
            $post->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('images', 'posts-media');
        }

        flash()->overlay($post->title . ' created successfully', 'Create Post');

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        
        $users = User::all()->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        return view('admin.posts.edit', compact('post', 'users', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {

        $request->validated();


        //Update Post Fields
        $post->published_at = $request->get('published_at');
        $post->user_id = $request->get('user_id');
        $post->category_id = $request->get('category_id');
        
        //Update Translatable fields
        $post_translation = PostTranslation::where('post_id', $post->id)
        ->where('locale', app()->getLocale())->first();

        if($post_translation != null){
            $post_translation->title = $request->get('title');
            $post_translation->url = Str::slug($post_translation->title);
            $post_translation->excerpt = $request->get('excerpt');
            $post_translation->iframe = $request->get('iframe');
            $post_translation->body = $request->get('body');
            $post_translation->save();
        }else{
            $post_translation = PostTranslation::create([
                'post_id' => $post->id,
                'locale' => app()->getLocale(),
                'title' => $request->get('title'),
                'url' => Str::slug($request->get('title')),
                'excerpt' => $request->get('excerpt'),
                'iframe' => $request->get('iframe'),
                'body' => $request->get('body'),
            ]);
        }

        

        if (($post->getMedia('images'))) {
            foreach ($post->getMedia() as $media) {
                if (!in_array($media->file_name, $request->input('images', []))) {
                    $media->delete();
                }
            }
        }
    
        $media = $post->getMedia()->pluck('file_name')->toArray();
    
        foreach ($request->input('images', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $post->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('images','posts-media');
            }
        }
    
        
        flash()->overlay($post->title . ' updated successfully', 'Update Post');

        return redirect()->route('posts.index');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $post ->delete();

        flash()->overlay($post->title . ' deleted successfully', 'Delete Post');

        return redirect()->route('posts.index');
    }



    public function storeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function deleteMedia(Media $media)
    {
        //Borrem del servidor        
        File::delete('media/posts' . "/" . $media->model_id . "/" . $media->file_name);
        
        //Borrem de la base de dades
        $media->delete();

        flash()->overlay('Deleted successfully', 'Delete Image');

        return redirect()->back();
    }
}
