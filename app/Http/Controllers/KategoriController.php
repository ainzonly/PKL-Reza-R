<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function dataK()
    {
        $varKat = Kategori::where('delstatus','=',1)->latest()->get();
        // $varUser = User::orderBy('id','desc')->paginate(2);
        // $varKat = Kategori::orderBy('id','desc')->get();
        // $varUser = User::latest()->get();
        return view('superadmin.kategori', compact('varKat'));
    }

    public function tambahK()
    {
        return view('superadmin.tambah-kategori');
    }

    public function ubahK($id)
    {
        $varKat = Kategori::findOrFail($id);
        return view('superadmin.ubah-kategori', compact('varKat'));
    }

    public function simpanK(Request $request)
    {
        Kategori::create([
            'namakategori' => $request->namakategori,

            'delstatus' => 1,
        ]);
        return redirect('kategori');
    }

    public function simpanUbahanK(Request $request, $id)
    {
            $varKat =Kategori::findOrFail($id);

            $data = [
                'namakategori' => $request->namakategori,

            ];

            $varKat->update($data);
            return redirect('kategori');
    }

    public function hapusK($id)
    {
        $varKat = Kategori::findOrFail($id);
        $data=['delstatus' => false,];
        $varKat->update($data);
        return redirect('kategori');
    }
}
