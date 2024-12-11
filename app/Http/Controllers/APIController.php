<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function getData()
    {
        return [
            "name" => "P. Wandee",
            "email" => "pichit.wwwd@bru.ac.th",
            "department" => "Information Technology"
        ];
    }

    public function getPostData()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts?userId=1');
        $data = json_decode($response->body(), true);
        return view('post')->with('data', $data ?: []);
    }

    public function GetPostDataById($id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/posts/{$id}");
        $data = json_decode($response->body(), true);
        return view('post-id')->with('data', $data ?: null);
    }

    // ฟังก์ชันใหม่: ดึงข้อมูลจาก https://reqres.in/api/users
    public function getUsers()
    {
        $response = Http::get('https://reqres.in/api/users');
        $data = json_decode($response->body(), true); // แปลง JSON เป็น array
        return view('users')->with('data', $data['data'] ?? []); // ส่งเฉพาะข้อมูลใน key "data"
    }
}
