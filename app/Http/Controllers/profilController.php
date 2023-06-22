<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;

class profilController extends Controller
{

    // function show(){
    //     $data['profil']= profil::all();
    //     return view ('profil',$data);
    // }
    function show(){
        $profil = profil::first();
        if($profil){
            $data = [
                'nis' => $profil->nis,
                'nama' => $profil->nama,
                'ttl' => $profil->ttl,
                'sekolah' => $profil->sekolah,
                'alamat' => $profil->alamat,
                'foto' => $profil->foto,
                'action' => '/profil/update',$profil->nis
            ];
            return view('profil',$data);
        }else{
            $data = [
                'nis' => '',
                'nama' => '',
                'ttl' => '',
                'sekolah' => '',
                'alamat' => '',
                'foto' => '',
                'action' => 'profil/create/'
            ];
            return view('profil',$data);
        }
    }
    function create(Request $request){
        profil::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'sekolah' => $request->sekolah,
            'alamat' => $request->alamat,
            'foto' => $request->file('foto')->store('foto')
        ]);

        return redirect('profil');
    }
    function edit($id){
        $data['profil'] = profil::find($id);
        $data['action'] = url('profil/update')."/".$data['profil']->nis;
        $data['tombol'] = "update";
        
        return view('profil',$data);
    }
    function update(Request $request){
        $data = profil::where('nis',$request->nis)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        profil::where('nis',$request->nis)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'sekolah' => $request->sekolah,
            'alamat' => $request->alamat,
            'foto' => $foto
        ]);

        return redirect('profil');
    }

}