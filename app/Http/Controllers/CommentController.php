<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function create()
    {
        dd("Cоздание комментария");

    }

    public function edit(){
        dd("Edit Comment");
    }

    public function delete()
    {
        dd("Deletе comment");
    }
}
