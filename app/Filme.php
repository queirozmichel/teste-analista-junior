<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
	protected $fillable = ['nome','ano','diretor','nota','sinopse','cadastro_id'];
	protected $guarded = ['id','created_at','updated_at'];
	protected $table = 'filme'; 
}
