<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
	protected $appends = ['contact_name'];
	public function getContactNameAttribute()
	{
		// return $this->contact->name;
		return $this->contact()->first(['name'])->name;
	}
	public function contact()
	{
		//Conversacion N  1 User(Contacto)
		return $this->belongsTo(User::class);
	}
}
