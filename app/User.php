<?php
	
	namespace App;
	
	use Illuminate\Foundation\Auth\User as Authenticatable;
	use Illuminate\Notifications\Notifiable;
	
	/**
	 * @method static create(array $all)
	 */
	class User extends Authenticatable
	{
		use Notifiable;
		
		protected $fillable = [
			'last_name', 'first_name',
			'gender', 'birth',
			'avatar', 'phone',
			'email', 'password',
			'position_id', 'office_id', 'creator_id'
		];
		
		protected $hidden = [
			'password', 'remember_token',
		];
		
		protected $casts = [
			'email_verified_at' => 'datetime',
			'birth'             => 'date'
		];
		
		public function getFullNameAttribute(): string
		{
			return ucfirst($this->first_name) . ' ' . strtoupper($this->last_name);
		}
		
		public function createdPositions()
		{
			return $this->hasMany(Position::class);
		}
		
		public function createdOffices()
		{
			return $this->hasMany(Office::class);
		}
		
		public function office()
		{
			return $this->belongsTo(Office::class);
		}
		
		public function position()
		{
			return $this->belongsTo(Position::class);
		}
		
		public function creator()
		{
			return $this->belongsTo(User::class);
		}
		
		public function createdUsers()
		{
			return $this->hasMany(User::class, 'creator_id');
		}
		
		public function activities()
		{
			return $this->hasMany(Activity::class);
		}
		
		public function roles()
		{
			return $this->belongsToMany(Role::class);
		}
		
	}
