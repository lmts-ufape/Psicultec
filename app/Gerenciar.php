<?php

namespace nemo;

use Illuminate\Database\Eloquent\Model;

class Gerenciar extends Model
{
    protected $fillable = ['user_id', 'piscicultura_id','is_administrador'];
    public $timestamps = false;

    public static $rules = [
		'email' => 'required|email',
		
	];

	public static $messages = [
        'required' => 'O campo ":attribute" não pode ser vazio.',
        'email' => 'O campo ":attribute" não é valido'
	];

    public function user(){
        return $this->belongsTo('nemo\User', 'user_id');
    }

    public function piscicultura(){
        return $this->belongsTo('nemo\Piscicultura', 'piscicultura_id');
    }
}
