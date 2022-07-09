<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nhanvien;
use \Datetime;

class NhanvienController extends Controller
{

    public function index()
    {
        $db = Nhanvien::all();
        return json_encode($db);
    }

    public function Get(){
        return Nhanvien::all();
    }

    public function store(Request $request)
    {
        $db = new Nhanvien();
        // $db=$request->all();
        $db->id = $request->id;
        $db->ten_nhanvien = $request->ten_nhanvien;
        $db->gioitinh = $request->gioitinh;
        $db->ngaysinh = $request->ngaysinh;
        $db->quequan = $request->quequan;
        $db->sdt = $request->sdt;
        $db->email = $request->email;
        $db->capbac = $request->capbac;
        $db->save();
        return $db;
    }

    public function update(request $request,$id){
        $db = Nhanvien::findorFail($id);
        $db->ten_nhanvien=$request->ten_nhanvien;;
        $db->gioitinh = $request->gioitinh;
        $db->ngaysinh = $request->ngaysinh;
        $db->quequan = $request->quequan;
        $db->sdt = $request->sdt;
        $db->email = $request->email;
        $db->capbac = $request->capbac;
        $db->save();
        return $db;
    }

    public function destroy($id){
        nhanvien::findOrFail($id)->delete();
        return "Đã xóa";
    }

    public function show($id)
    {
        return Nhanvien::find($id);
    }
    
}
