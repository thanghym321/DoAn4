<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slideshow;

class SlideshowController extends Controller
{
    public function index()
    {
        $db = Slideshow::all();
        return json_encode($db);
    }

    public function Get(){
        return Slideshow::all();
    }

    public function store(Request $request)
    {
        $db = new Slideshow();
        // $db=$request->all();
        $db->id = $request->id;
        $db->tenslide = $request->tenslide;
        $db->image = $request->image;
        $db->save();
        return $db;
    }

    public function update(request $request,$id){
        $db = Slideshow::findorFail($id);
        $db->tenslide = $request->tenslide;
        $db->image = $request->image;
        $db->save();
        return $db;
    }

    public function destroy($id){
        Slideshow::findOrFail($id)->delete();
        return "Đã xóa";
    }

    public function show($id)
    {
        return Slideshow::find($id);
    }
}
