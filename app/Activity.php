<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $data)
 */
class Activity extends Model
{
    protected $fillable = ['table', 'msg', 'url', 'user_id'];
	
	public function user()
	{
		return $this->belongsTo(User::class);
    }
}
