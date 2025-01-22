<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // ดึงข้อมูลโพสต์ทั้งหมด
    public function index()
    {
        return Post::all();
    }

    // สร้างโพสต์ใหม่
    public function store(Request $request)
    {
        $post = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create($post);

        return response()->json(['post' => $post], 201);
    }

    // ดึงโพสต์ตาม ID
    public function show(Post $post)
    {
        return $post;
    }

    // แก้ไขโพสต์
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($data);

        return response()->json($post, 200);
    }

    // ลบโพสต์
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json(['message' => 'Post deleted'], 200);
    }
}