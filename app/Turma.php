<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
	// Método Disciplina
	public function disciplina()
	{
		return $this->belongsTo('App\disciplina');
	}
}
