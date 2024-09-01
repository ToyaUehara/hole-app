<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Hole;
use Illuminate\Http\Request;

class HoleController extends Controller
{
    public function index(Hole $hole)
    {
        return view('holes.index')->with(['holes' => $hole->get()]);
    }
    public function show(Hole $hole)
    {
        return view('holes.show')->with(['hole' => $hole]);
    }
}
?>