<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terima extends Model
{
    use HasFactory;
    protected $table = 'terimas';
    protected $primarykey = 'id';
    protected $fillable = [
    'id',
    'judul',
    'jumlah_dana',
 'file',
    ];
}
