<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $table='makanan';
    protected $guarded=['id'];

  
  public function kategori()
  {
      return $this->belongsTo(Kategori::class,'id_kategori');
  }
}
