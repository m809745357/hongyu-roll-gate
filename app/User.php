<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const STATUS_NORMAL = 1;

    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'openid', 'status', 'avatar', 'nickname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    * 设置默认的openid来获取token
    * @param  [type] $username [description]
    * @return [type]           [description]
    */
    public function findForPassport($username)
    {
        return \App\User::normal()
           ->where('openid', $username)
           ->first();
    }

    /**
     * 获取正常的用户
     * @param  [type] $query [description]
     * @return [type]        [description]
     */
    public function scopeNormal(Builder $query)
    {
        return $query->where('status', self::STATUS_NORMAL);
    }

    /**
    * 判断密码是否等于设置的123456
    * @param  [type] $password [description]
    * @return [type]           [description]
    */
    public function validateForPassportPasswordGrant($password)
    {
        return $password == 'huishuoit';
    }
}
