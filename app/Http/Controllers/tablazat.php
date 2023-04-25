<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class tablazat extends Controller
{
    public function elkuld(Request $req){
        $rogzites=DB::select("INSERT INTO szin (red, green, blue, rogzitesIdeje) VALUES (?,?,?,?)",[$req->red,$req->green,$req->blue,date("Y-m-d H:i:s")]);
        $data['msg']="fghjkl";
        return response()->json($data);
    }
    public function megjelenites(){
        $tablazat=DB::select("SELECT * FROM szin");
        return view('welcome',['tablazat'=>$tablazat]);
    }
}
