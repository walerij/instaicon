<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public  function index()
    {
       $posts= Post::all();
       return view('posts.index', compact('posts'));
    }
    public function create()
    {
       return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
           "media"=> 'image',
            "posttext"=>"string",
            "public"=>'boolean',
            'user_id'=>"integer"
        ]);

       $post= Post::create([
            "postdate"=>date('Y-m-d H:i:s'),
            "media"=>$this->set_image($data["media"]),
            "posttext"=>$data["posttext"],
           'user_id'=>auth()->user()->id,
            "public"=>true,
        ]);
        return redirect()->route('posts.index');
    }

    public function edit()
    {
        dd("Редактирование поста");
    }

    public function update()
    {
        dd("Сохранение поста");
    }

    public function delete()
    {
        dd("Удаление поста");
    }


    public function set_image($media){
        $filename =time().'.'.$media->extension();
        //dump($filename);
        //Сохраняем оригинальную картинку
        $media->move(public_path('images/posts/'),$filename);
        return($filename);
    }

}
