<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Hole;
use Illuminate\Http\Request;

class HoleController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        
        $query = Hole::query();
        
        if(!empty($keyword)){
            $query->where('name', 'LIKE', "%{$keyword}%");
        }
        
        $holes = $query->get();
        
        return view('holes.index', compact('holes', 'keyword'));
        
    }
    public function show(Hole $hole)
    {
        $posts = Post::where('hole_id', $hole->id)->get();
        return view('holes.show')->with(['hole' => $hole, 'posts' => $posts]);
    }
   
    public function create()
{
    return view('holes.create');
}
    public function store(Request $request, Post $post)
{
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
}
}
?>