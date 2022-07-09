<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phanhoi;

class PhanhoiController extends Controller
{
    public function index()
    {
        $db = Phanhoi::all();
        return json_encode($db);
    }

    public function Get(){
        return Phanhoi::all();
    }

    public function store(Request $request)
    {
        $db = new Phanhoi();
        // $db=$request->all();
        $db->id_tk = $request->id_tk;
        $db->id_sp = $request->id_sp;
        $db->level = $request->level;
        $db->note = $request->note;
        $db->save();
        return $db;
    }

    public function update(request $request,$id){
        $db = Phanhoi::findorFail($id);
        $db->id_tk = $request->id_tk;
        $db->id_sp = $request->id_sp;
        $db->level = $request->level;
        $db->note = $request->note;
        $db->save();
        return $db;
    }

    public function destroy($id){
        Phanhoi::findOrFail($id)->delete();
        return "Đã xóa";
    }

    public function show($id)
    {
        return Phanhoi::find($id);
    }
}
