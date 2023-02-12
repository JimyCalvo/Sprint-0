<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Restaurant;
use App\Models\Profile;
use App\Models\Rol;
use App\Models\Comment;
use App\Models\Evaluation;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'email',
        'username',
        'password',
        'birthday',
        'rol_id_fk'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday'=>'date'
    ];


    public function profile(){
        return $this->hasOne(Profile::class,'user_id_fk');
    }
    public function restaurant(){
        return $this->hasMany(Restaurant::class,'user_id_fk');
    }
    public function rol(){
        return $this->belongsTo(Rol::class,'rol_id_fk','rol_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'user_id_fk');
    }

    public function evaluations(){
        return $this->hasMany(Evaluation::class,'user_id_fk');
    }

}
