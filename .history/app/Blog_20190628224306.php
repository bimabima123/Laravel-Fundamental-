<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
// elequent
class Blog extends Model
{
    protected $table = 'sekolah';
    protected $fillable = ['nama','tempat','tahun','jurusan']; //whiteliss (yang diperbolehkan) 
    // protected $guarded = ['']; //whiteliss (yang diperbolehkan) 
    public $timestamps = false;
}
