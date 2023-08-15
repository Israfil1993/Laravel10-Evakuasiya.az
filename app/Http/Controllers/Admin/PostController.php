<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list()
    {
        $postsAz = Post::query()
            ->whereNotNull('title_az')
            ->whereNotNull('description_az')
            ->select('id', 'title_az', 'description_az', 'image','status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $postsEn = Post::query()
            ->whereNotNull('title_en')
            ->whereNotNull('description_en')
            ->select('id', 'title_en', 'description_en','image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $postsRu = Post::query()
            ->whereNotNull('title_ru')
            ->whereNotNull('description_ru')
            ->select('id', 'title_ru', 'description_ru','image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('backend.pages.posts.list', compact('postsAz', 'postsEn', 'postsRu'));
    }

    public function create()
    {
        return view('backend.pages.posts.create');
    }

    public function store(PostRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/posts'), $imageName);
            $validated['image'] = $imageName;
        }

        Post::create($validated);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('backend.pages.posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, $id)
    {
        $previous_image = $request->previous_image;

        $post= Post::findOrFail($id);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/posts'), $imageName);
            $validated['image'] = $imageName;

            if (file_exists($previous_image))
            {
                unlink($previous_image);
            }
        }

        $post->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.post.list')->with($notification);
    }

    public function delete($id)
    {
        $posts = Post::findOrFail($id);

        $image = $posts->image;

        if (file_exists($image))
        {
            unlink($image);
        }

        Post::findOrfail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
