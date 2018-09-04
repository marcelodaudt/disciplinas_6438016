<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disciplina extends Model
{
	// Método Turmas
	public function turmas()
	{
		return $this->hasMany('App\Turma');
	}
}
