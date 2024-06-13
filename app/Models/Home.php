<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $guarded=['id'];
    protected $table = 'home';
    protected $fillable = ['image','tanggal','keterangan'];
    use HasFactory;
}
