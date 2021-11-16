<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comment =Comment::all();
        return view('admin.comment.index', compact('comment'));
    }
    public function create(){


    }
    public function store(){

    }
    public function update(){

    }
    public function delete($id){
        Comment::find($id)->delete();
        return redirect()->route('admin.comment.index');
    }
}
