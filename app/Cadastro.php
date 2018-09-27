<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
	protected $fillable = ['nome','titulacao','cpf','rg','email'];
	protected $guarded = ['id','created_at','updated_at'];
	protected $table = 'cadastro';

	public function filme()
	{
		return $this->hasMany(Filme::Class,'cadastro_id');
	}
}
