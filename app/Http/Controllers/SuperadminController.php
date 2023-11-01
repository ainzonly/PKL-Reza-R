<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proposal;

class SuperadminController extends Controller
{
    public function index() {
        return view('superadmin.index');
    }

    public function listProp()
    {
       $varList = Proposal::with('kategori')->where('delstatus','=',1)->latest()->get();

        return view('superadmin.listprop', compact('varList'));
    }
    public function listMa()
    {
       $varMa = Proposal::with('kategori')->where('delstatus','=',0)->latest()->get();

        return view('superadmin.listma', compact('varMa'));
    }
    public function terimaProp($id)
    {
        $varTerima = Proposal::findOrFail($id);
        $data=['delstatus' => false,];
        $varTerima->update($data);
        return redirect('proposal');
    }
}
