<?php
	
	namespace App;
	
	use Illuminate\Database\Eloquent\Model;
	
	/**
	 * @method static create(array $array)
	 */
	class Country extends Model
	{
		protected $fillable = ['name'];
		
		public function offices()
		{
			return $this->hasMany(Office::class);
		}
	}
