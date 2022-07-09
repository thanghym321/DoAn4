<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sanpham;
use \Datetime;

class SanphamController extends Controller
{
    public function index()
    {
        $db = Sanpham::all();
        return json_encode($db);
    }

    public function Get(){
        return Sanpham::all();
    }

    public function store(Request $request)
    {
        $db = new Sanpham();
        // $db=$request->all();
        $db->id = $request->id;
        $db->name = $request->name;
        $db->id_loai_sp = $request->id_loai_sp;
        $db->id_ncc = $request->id_ncc;
        $db->mota_sp = $request->mota_sp;
        $db->gia = $request->gia;
        $db->so_luong = $request->so_luong;
        $db->image = $request->image;
        $db->don_vi_tinh = $request->don_vi_tinh;
        $db->save();
        return $db;
    }

    public function update(request $request,$id){
        $db = Sanpham::findorFail($id);
        $db->name = $request->name;
        $db->id_loai_sp = $request->id_loai_sp;
        $db->id_ncc = $request->id_ncc;
        $db->mota_sp = $request->mota_sp;
        $db->gia = $request->gia;
        $db->so_luong = $request->so_luong;
        $db->image = $request->image;
        $db->don_vi_tinh = $request->don_vi_tinh;
        $db->save();
        return $db;
    }

    public function destroy($id){
        Sanpham::findOrFail($id)->delete();
        return "Đã xóa";
    }

    public function show($id)
    {
        return Sanpham::find($id);
    }
}
