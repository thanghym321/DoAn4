<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChitietHDBan;

class ChitietHDBanController extends Controller
{
    public function index()
    {
        $db = ChitietHDBan::all();
        return json_encode($db);
    }

    public function Get(){
        return ChitietHDBan::all();
    }

    public function store(Request $request)
    {
        
        $db = new ChitietHDBan();
        $db->id_kh = $request->id_kh;
        $db->note = $request->note;
        $db->payment = $request->payment;
        $db->status="Đã đặt hàng";
        $db->save();
        return $db;
    }

    public function update(request $request,$id){
        $db = ChitietHDBan::findorFail($id);
        $db->id_bill_ban = $request->id_bill_ban;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->save();
        return $db;
    }

    public function destroy($id){
        ChitietHDBan::findOrFail($id)->delete();
        return "Đã xóa";
    }

    public function show($id)
    {
        return ChitietHDBan::find($id);
    }
}
