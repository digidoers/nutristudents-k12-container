<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

use Bytelaunch\Nutristudents\Models\Site;
use Bytelaunch\Nutristudents\Models\Group;
use Bytelaunch\Nutristudents\Models\MenuCycle;
use Bytelaunch\Nutristudents\Models\UserPermission;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;


//    protected $connection = 'pg_tenant';
//
//    protected $connection = 'pg_tenant';

//    public function __construct(array $attributes = [])
//    {
//        if ($_SERVER['HTTP_HOST'] != 'tenancy.test:9006') {
//            ray('✅      set');
//            $this->setConnection('pg_tenant');
//        }
//        if ($attributes) {
//
//            parent::__construct($attributes);
//        }
//    }

    protected static function booted()
    {
        // ray(User::all()->toArray());
        parent::booted(); // TODO: Change the autogenerated stub
    }

    // public $appends = ['TemplatePermission'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'type',
        'email',
        'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url' 
    ];


    public function sites(): BelongsToMany
    {
        return $this->belongsToMany(Site::class);
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class);
    }

    public function canAccessFilament(): bool
    {
        return true;
        return str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
    }

    public function menuCycles(){
        return $this->hasMany(MenuCycle::class);
    }

    public function template_permissions(){
        return $this->hasMany(UserPermission::class)->where('type', 'templates')->where('is_access', true); 
    } 

    public function isSuperUser(){
        if($this->type == "Super Admin"){
            return true;
        }
        return false;
    }
    
}
