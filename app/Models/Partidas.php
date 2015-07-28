<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partidas extends Model {

	protected $table = 'juego';
	protected $fillable = ['activo'];
	public $timestamps = false;

}

