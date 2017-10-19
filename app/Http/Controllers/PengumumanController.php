<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pengumuman;

class PengumumanController extends Controller{

    // Tambah pengumuman
	public function tambahPengumuman(Request $request){
        $pengumuman = new Pengumuman();
        $pengumuman->courseid = $request->courseid;
        $pengumuman->title = $request->title;
        $pengumuman->description = $request->description;
        $pengumuman->teacher = $request->teacher;
        $pengumuman->save();
    }

    // Daftar pengumuman
    public function getPengumuman($matkul){
        $idMatkul = explode("-", $matkul);
        $pengumuman = new Pengumuman();
    	$pengumuman = $pengumuman::whereIn('courseid', $idMatkul)->get();
        return response()->json($pengumuman);
    }

    // Detail Pengumuman
    public function getDetailPengumuman($id){
        $pengumuman = Pengumuman::where('id_pengumuman', $id)->get();
        return response()->json($pengumuman); 
    }

}
