<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


    protected $table = 'company';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'store_name',
        'store_owner',
        'store_address',
        'store_email',
        'store_phone',
        'store_rfc'
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

    public function scopeGetCompany($query,$filters){
        return $this->where(function($query) use ($filters){
            if(!is_null($filters->name) && $filters->name != ''){
                $query->where('name','LIKE','%'.$filters->name.'%');
            }
        })->get();
    }

    public function scopeGetAllCompany($query){
        return $this->all();
    }
    public function scopeGetCompanyById($query,$id){
        return $this->find($id);
    }

}
