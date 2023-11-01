<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
     use HasFactory;
    protected $table = 'proposals';
    protected $primarykey = 'id';
    protected $fillable = [
    'id',
    'judul',
    'kategori_id',
    'jumlah_dana',
    'namakategori',
    'file',
    'delstatus',
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, "kategori_id");
    }
}
