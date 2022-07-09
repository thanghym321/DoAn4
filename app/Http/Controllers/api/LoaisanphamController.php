<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loaisanpham;

class LoaisanphamController extends Controller
{
    public function index()
    {
        $db = Loaisanpham::all();
        return json_encode($db);
    }

    public function Get(){
        return Loaisanpham::all();
    }

    public function store(Request $request)
    {
        $db = new Loaisanpham();
        // $db=$request->all();
        $db->id = $request->id;
        $db->tenloai = $request->tenloai;
        $db->image = $request->image;
        $db->save();
        return $db;
    }

    public function update(request $request,$id){
        $db = Loaisanpham::findorFail($id);
        $db->tenloai = $request->tenloai;
        $db->image = $request->image;
        $db->save();
        return $db;
    }

    public function destroy($id){
        Loaisanpham::findOrFail($id)->delete();
        return "Đã xóa";
    }

    public function show($id)
    {
        return Loaisanpham::find($id);
    }
}
