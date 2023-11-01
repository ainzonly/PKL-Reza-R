<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class Proposal extends Controller
{
    public function dataB()
        {
           $varBang = Proposal::with('kategori')->where('delstatus','=',1)->latest()->get();
            // $varUser = User::orderBy('id','desc')->paginate(2);
            //$varBang = Bangunan::orderBy('id','desc')->get();
            //$varBang = Bangunan::latest()->get();
            return view('userbiasa.proposal', compact('varBang'));
        }



        public function tambahB()
        {
            $kitkat = Kategori::where('delstatus', '=',1)->latest()->get();
            return view('userbiasa.tambah-proposal', compact('kitkat'));
        }

        public function ubahB($id)
        {
            $varBang = Proposal::findOrFail($id);
            return view('ubah-proposal', compact('varBang'));
        }

        public function store(Request $request)
        {
           $gbg = $request->gambar;
            $namafile = $gbg->getClientOriginalName();
                $dtUpload = new Proposal;
                $dtUpload->Judul = $request->nama_bangunan;
                $dtUpload->file =$namafile;
                $dtUpload->kategori_id = $request->kategori_id;
                $dtUpload->jumlah_dana = $request->deskripsi;
                $dtUpload->delstatus =1;


                $gbg->move(public_path().'/file', $namafile);
                $dtUpload->save();

                return redirect('proposal');
            }

            public function hapusB($id)
        {
            $data = proposal::findOrFail($id);
            $data->delete();

            return redirect('proposal');
        }
}
