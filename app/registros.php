<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registros extends Model
{
    protected $table = "registro";
    protected $fillable = ['nombre','interes','email','lugar_origen','tel_casa','tel_cel','esc_proc','no_esta','carr_1','carr_2','desea_inf'];


}
