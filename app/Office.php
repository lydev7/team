<?php
	
	namespace App;
	
	use Illuminate\Database\Eloquent\Model;
	
	/**
	 * @method static create(array $data)
	 */
	class Office extends Model
	{
		protected $fillable = [
			'name', 'logo', 'phone', 'address1', 'address2', 'country_id', 'creator_id'
		];
		
		public function country()
		{
			return $this->belongsTo(Country::class);
		}
		
		public function creator()
		{
			return $this->belongsTo(User::class);
		}
	}
