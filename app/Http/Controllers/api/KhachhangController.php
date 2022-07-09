<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Khachhang;
use \Datetime;

class KhachhangController extends Controller
{
    public function index()
    {
        $db = Khachhang::all();
        return json_encode($db);
    }

    public function Get(){
        return Khachhang::all();
    }

    public function store(Request $request)
    {
        $db = new Khachhang();
        // $db=$request->all();
        $db->id = $request->id;
        $db->ten_kh = $request->ten_kh;
        $db->email = $request->email;
        $db->dia_chi = $request->dia_chi;
        $db->sdt = $request->sdt;
        $db->note = $request->note;
        $db->save();
        return $db;
    }

    public function update(request $request,$id){
        $db = Khachhang::findorFail($id);
        $db->ten_kh = $request->ten_kh;
        $db->email = $request->email;
        $db->dia_chi = $request->dia_chi;
        $db->sdt = $request->sdt;
        $db->note = $request->note;
        $db->save();
        return $db;
    }

    public function destroy($id){
        Khachhang::findOrFail($id)->delete();
        return "Đã xóa";
    }

    public function show($id)
    {
        return Khachhang::find($id);
    }
}
