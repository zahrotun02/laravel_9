<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    use HasFactory;
    protected $table = 'sekolahs';
    protected $primarykey = 'id';
    protected $fillable =['nama', 'alamat', 'jurusan', 'jumlah_guru'];

}
