<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nhacungcap;

class NhacungcapController extends Controller
{
    public function index()
    {
        $db = Nhacungcap::all();
        return json_encode($db);
    }

    public function Get(){
        return Nhacungcap::all();
    }

    public function store(Request $request)
    {
        $db = new Nhacungcap();
        // $db=$request->all();
        $db->id = $request->id;
        $db->ten_ncc = $request->ten_ncc;
        $db->diachi_ncc = $request->diachi_ncc;
        $db->email = $request->email;
        $db->sdt = $request->sdt;
        $db->Delet = $request->Delet;
        $db->save();
        return $db;
    }

    public function update(request $request,$id){
        $db = Nhacungcap::findorFail($id);
        $db->ten_ncc = $request->ten_ncc;
        $db->diachi_ncc = $request->diachi_ncc;
        $db->email = $request->email;
        $db->sdt = $request->sdt;
        $db->Delet = $request->Delet;
        $db->save();
        return $db;
    }

    public function destroy($id){
        Nhacungcap::findOrFail($id)->delete();
        return "Đã xóa";
    }

    public function show($id)
    {
        return Nhacungcap::find($id);
    }
}
