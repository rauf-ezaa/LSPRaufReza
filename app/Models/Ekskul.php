<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $guarded = ['id'];
    protected $table = 'ekskul';
    protected $fillable = ['image','tanggal','keterangan'];
    use HasFactory;
}
