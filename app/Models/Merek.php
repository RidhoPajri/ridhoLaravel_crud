<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;

    protected $filleble = ['nama_merek'];
    protected $visible = ['nama_merek']; 
    public $timestamps = true;

    public function Barang(){
        return $this->hasOne(Barang::class);
    }
}
