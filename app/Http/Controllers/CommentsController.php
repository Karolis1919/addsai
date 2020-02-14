<?php

namespace App\Http\Controllers;
use app\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function addComment(Ad $ad){
        Comments::create([
            'name' =>Auth()->id(),
            'text' => request('text'),
            'post_id' => $ad->id,
            'user_id' => Auth()->id()
        ]);

        return back();
    }
}
