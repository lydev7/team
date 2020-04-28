<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 */
class Position extends Model
{
    protected $fillable = ['name', 'creator_id'];
	
	public function creator()
	{
		return $this->belongsTo(User::class);
    }
}
