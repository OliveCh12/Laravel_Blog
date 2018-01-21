<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
	public function store(Post $post)
	{
		$this->validate(\request(), ['body' => 'required|min:2']);
		$post->comments()->create( [ 'body' => request( 'body' ) ] );
		return back();
	}
	public function destroy($id)
	{
		$post->comments()->delete(['id']);
	}
}
