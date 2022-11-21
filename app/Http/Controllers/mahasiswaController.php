<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswaController extends Controller
{
    public function show()
    {
        return view('index',[
            'tittle'=>'home',
            'mahasiswa'=>mahasiswa::all()
        ]);
    }

    public function tambah()
    {
        return view('tambah',['tittle'=>'tambah']);
    }

    public function tambahAction(Request $request)
    {
        DB::table('mahasiswas')->insert([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'email'=>$request->email,
            'alamat'=>$request->alamat
        ]);
        return redirect('/home');
    }

    public function edit($id)
    {
        $mahasiswa = DB::table('mahasiswas')->where('id',$id)->get();
        
        return view('edit',['mahasiswa'=>$mahasiswa]);
    }

    public function editAction(Request $request)
    {
        DB::table('mahasiswas')->where('id',$request->id)->update([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'email'=>$request->email,
            'alamat'=>$request->alamat
        ]);

        return redirect('home');
    }
    
    public function delete($id)
    {
        DB::table('mahasiswas')->where('id',$id)->delete();

        return redirect('home');
    }

    public function about(){
        return view('about',['tittle'=>'about']);
    }
}
