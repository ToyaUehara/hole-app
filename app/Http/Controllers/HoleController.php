<?php

namespace App\Http\Controllers;

use App\Models\Hole;
use Illuminate\Http\Request;

class HoleController extends Controller
{
    public function index(Hole $hole)
    {
        return view ('holes.index')->with(['holes' => $hole->get()]);
        //blade内で使う変数'holes'と設定。'holes'の中身にgetを使い、インスタンス化した$holeを代入。
    }
}
