<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CommentService;
use App\Comment;

class CommentController extends Controller
{
    public function index()
    {
        return view('admin.comment.report');
    }

    public function loadComments(Request $request)
    {
        $filter = $request->input('filter');
        return  CommentService::loadComments($filter);
    }

    public function destroy($id){
    	return CommentService::deleteComment($id);
    }
}
