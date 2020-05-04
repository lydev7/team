<?php
	
	namespace App;
	
	use Illuminate\Database\Eloquent\Model;
	
	/**
	 * @method static create(array $array)
	 */
	class Role extends Model
	{
		protected $guarded = [];
		public $timestamps = FALSE;
		protected $table = 'roles';
		
		public function users()
		{
			return $this->belongsToMany(User::class);
		}
	}
