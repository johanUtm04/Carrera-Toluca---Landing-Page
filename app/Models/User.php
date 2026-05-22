<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// +----------------+------------------------+------+-----+-------------------+-----------------------------------------------+
// | Field          | Type                   | Null | Key | Default           | Extra                                         |
// +----------------+------------------------+------+-----+-------------------+-----------------------------------------------+
// | id             | bigint unsigned        | NO   | PRI | NULL              | auto_increment                                |
// | name           | varchar(255)           | NO   |     | NULL              |                                               |
// | email          | varchar(255)           | NO   | UNI | NULL              |                                               |
// | password       | varchar(255)           | NO   |     | NULL              |                                               |
// | role           | enum('runner','admin') | YES  |     | runner            |                                               |
// | payment_status | varchar(255)           | NO   |     | pending           |                                               |
// | payment_id     | varchar(255)           | YES  |     | NULL              |                                               |
// | bib_number     | varchar(255)           | YES  |     | NULL              |                                               |
// | remember_token | varchar(100)           | YES  |     | NULL              |                                               |
// | created_at     | timestamp              | YES  |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED                             |
// | updated_at     | timestamp              | YES  |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED on update CURRENT_TIMESTAMP |
// +----------------+------------------------+------+-----+-------------------+-----------------------------------------------+

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function runner()
    {
        return $this->hasOne(Runner::class);
    }
}
