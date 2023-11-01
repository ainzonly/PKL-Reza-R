<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserbiasaController extends Controller
{
    public function index() {
        return view('userbiasa.index');
    }
    
}
