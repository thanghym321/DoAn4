<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use \DateTime;

class NewsController extends Controller
{
    public function index()
    {
        $db = News::all();
        return json_encode($db);
    }

    public function Get(){
        return News::all();
    }

    public function store(Request $request)
    {
        $db = new News();
        // $db=$request->all();
        $db->title = $request->title;
        $db->content = $request->content;
        $db->image = $request->image;
        $db->save();
        return $db;
    }

    public function update(request $request,$id){
        $db = News::findorFail($id);
        $db->title = $request->title;
        $db->content = $request->content;
        $db->image = $request->image;
        $db->save();
        return $db;
    }

    public function destroy($id){
        News::findOrFail($id)->delete();
        return "Đã xóa";
    }

    public function show($id)
    {
        return News::find($id);
    }
}
