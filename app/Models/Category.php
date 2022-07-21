<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeGetUsers($query,$filters){
        return $this->where(function($query) use ($filters){
            if(!is_null($filters->name) && $filters->name != ''){
                $query->where('name','LIKE','%'.$filters->name.'%');
            }
        })->get();
    }

    public function scopeGetAllUsers($query){
        return $this->all();
    }
    public function scopeGetUsersById($query,$id){
        return $this->find($id);
    }

}
