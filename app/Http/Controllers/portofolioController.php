<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portofolio;

class portofolioController extends Controller
{
    //
    function show(){
        $data['portofolio']= portofolio::all();
        return view('portofolio',$data);
    }

    function add(){ 
        $data=[
            'action'=> url('portofolio/create'),
            'tombol'=>'simpan',
            'portofolio'=>(object)[
                'nama_portofolio'=>'',
                'kategori'=>'',
                'deskripsi'=>'',
                'foto'=>''
            ]
            ];
        return view('form_portofolio',$data);
    }
    function create(Request $request){
      portofolio::create([
            'nama_portofolio'=> $request->nama_portofolio,
            'kategori'=> $request->kategori,
            'deskripsi'=> $request->deskripsi,
            'foto'=> $request->file('foto')->store('foto')      
        ]);
      return redirect('portofolio');
    }
    function hapus($id){
        portofolio::where('id',$id)->delete();
        return redirect('portofolio');
    }  
    function edit($id){
        $data['portofolio'] =portofolio::find($id);
        $data['action'] = url('portofolio/update').'/'.$data['portofolio']->id;
        $data['tombol'] = "Update";
        
        return view('form_portofolio',$data);
    }
    function update(Request $request){
        portofolio::where('id', $request->id)->update([
            'nama_portofolio'=>$request->nama_portofolio,
            'kategori'=>$request->kategori,
            'deskripsi'=>$request->deskripsi,

        ]);

        return redirect('portofolio');
    }
    
    
}
